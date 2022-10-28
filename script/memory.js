const difficultyOption = [6, 8, 12, 20]
const carte = [];
var themeChosen = null;
var difficultyChosen = null;
var card;
var timerGlobal = false;
var move = 0;
let seconds_string = '';
let minutes_string = '';
var wait = false;

const theme = document.querySelector('#theme')

theme.addEventListener('change', () => {
    themeChosen = theme.value;
})


const difficulty = document.querySelector('#difficulty')

difficulty.addEventListener('change', () => {
    difficultyChosen = difficulty.selectedIndex - 1;
})

// code pop_up


function selectImage() {
    var carteChosen = Math.floor(Math.random() * (201 - 1) + 1);

    if (carte.includes(carteChosen)) {
        selectImage()
    } else {
        carte.push(carteChosen);
        carte.push(carteChosen);
    }
}
var card3;

var timeEnd;

function card2(card) {
    if (!wait) {

        var cond = true;

        let card2 = document.getElementById(card)

        card2.style.opacity = '100%'

        var valueCard = card2.getAttribute('value')

        if (valueCard == "false") {
            move++

            card2.setAttribute('value', 'true')

            if (move == 1) {
                card3 = card2
            } else if (move == 2) {
                wait = true
                var classCard = card2.getAttribute('class')
                var classCard2 = card3.getAttribute('class')

                if (classCard != classCard2) {
                    setTimeout(() => {
                        card2.style.opacity = '0%'
                        card3.style.opacity = '0%'

                        card2.setAttribute('value', 'false')
                        card3.setAttribute('value', 'false')

                        move = 0
                        wait = false
                    }, 1000)
                } else {
                    move = 0
                    wait = false
                }

                var opacityCard = document.querySelectorAll('td > img')

                opacityCard.forEach(element => {
                    if (element.style.opacity == "0") {
                        cond = false;
                    }
                });

                if (cond) {
                    timeEnd = `${minutes_string}:${seconds_string}`;
                    console.log(timeEnd);
                    openModal();
                    //on inject dans les balises <p> les variable javascript APRES la fin de la partie pour qu'elle ne soit pas nul
                    document.getElementById('display_temps_joueur').innerHTML = timeEnd;
                    document.getElementById('display_infos_joueur').innerHTML = move;
                    document.getElementById('display_score_joueur').innerHTML = finalScore;

                    envoyerScore()

                    // displayResult();
                }
            }
        }
    }
}


const play = document.querySelector('#play')

play.addEventListener('click', (event) => {
    event.preventDefault();

    let pCheck = document.querySelector('#pCheck');

    if (themeChosen == null || difficultyChosen == null) {

        if (pCheck != undefined) {
            pCheck.remove()
        }

        var menu = document.getElementById('errorMessage')
        var errorMessage = document.createElement("p")
        const errorText = document.createTextNode("Veuillez choisir un difficulter et un theme !");

        errorMessage.setAttribute('id', 'pCheck')

        errorMessage.appendChild(errorText)
        menu.appendChild(errorMessage)
    } else {

        var imgNb = 1;

        if (pCheck != undefined) {
            pCheck.remove()
        }

        let tblCheck = document.querySelector('table');
        if (tblCheck != undefined) {
            tblCheck.remove()
        }

        for (let index = 0; index < (difficultyOption[difficultyChosen] * difficultyOption[difficultyChosen]) / 2; index++) {
            selectImage()
        }

        var parent = document.getElementById('tableau');
        var tbl = document.createElement('table');
        var tbody = document.createElement('tbody');

        var imgNb = 1;

        for (let i = 0; i < difficultyOption[difficultyChosen]; i++) {
            var row = document.createElement('tr')
            for (let j = 0; j < difficultyOption[difficultyChosen]; j++) {
                var cell = document.createElement("td")
                var img = document.createElement('img')

                var random = Math.floor(Math.random() * (carte.length - 1) + 1)
                img.src = './assets/images/theme/' + theme.value + '/' + theme.value + ' (' + carte[random - 1] + ').png';

                img.style.display = "block";
                img.style.width = "100%";
                img.style.height = "100%";
                img.style.opacity = "0";
                cell.style.background = "#5A0FA5";
                cell.style.borderRadius = "15px";
                cell.style.border = "solid 2px #0D0B26";
                cell.style.transform = "scale(0.9)";
                cell.style.boxShadow = "5px 5px 5px black inset"

                img.setAttribute('id', imgNb)
                img.setAttribute("class", carte[random - 1])
                img.setAttribute("value", "false")
                img.setAttribute('onclick', 'startTimer(); card2(' + imgNb + ')')

                imgNb = imgNb + 1

                carte.splice(random - 1, 1)

                cell.appendChild(img)
                row.appendChild(cell)
            }
            tbody.appendChild(row)
        }
        tbl.appendChild(tbody)
        parent.appendChild(tbl)
    }
})


const time = document.querySelector('#time');
var finalScore = 10000;
function startTimer() {
    if (timerGlobal == false) {
        let seconds = 0;
        let minutes = 0;
        seconds_string = '';
        minutes_string = '';
        let timer;

        timer = setInterval(() => {
            seconds > 58 ? ((minutes += 1), (seconds = 0)) : (seconds += 1);
            seconds_string = seconds > 9 ? `${seconds}` : `0${seconds}`;
            minutes_string = minutes > 9 ? `${minutes}` : `0${minutes}`;
            time.innerHTML = `${minutes_string}:${seconds_string}`;
            finalScore = finalScore - 10;
        }, 1000);

        timerGlobal = true
    }
}


//*------------------------------- code pour la pop up -------------------------------*//
//definition des variables
var openModalButtons = document.querySelectorAll('[data-modal-target]')
var closeModalButtons = document.querySelectorAll('[data-close-button]')
var overlay = document.getElementById('overlay')
var modal = document.getElementById('modal')
// var finalScore = 10000 - (seconds_string + (minutes_string * 60));

//faire apparaitre les variables de jeu dans la pop up
//ne marche pas car les variable sont injecté dès que la page est chargé et non pas quand on a fini la partie
// console.log(timeEnd);
// document.getElementById('display_temps_joueur').innerHTML = timeEnd;
// document.getElementById('display_infos_joueur').innerHTML = move;
// document.getElementById('display_score_joueur').innerHTML = finalScore;

overlay.addEventListener('click', () => {
    closeModal();
})

function openModal() {
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal() {
    modal.classList.remove('active')
    overlay.classList.remove('active')
}
//fin code pop up




//*------------------------------- code pour envoyer les variables de score en BDD -------------------------------*//
function createFetchOptions(bodydata) {
    return {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'  //format URL
        },
        body: new URLSearchParams(bodydata) //encoder mon objet JS bodydata au format URL annoncé dans le headers pour que le PHP le comprenen
    }
}

function envoyerScore() {

    // cette partie recupere les donnée en lisant le formulaire html
    const formData = {};
    formData['score'] = finalScore;
    formData['temps'] = timeEnd;
    formData['coups'] = move;
    console.log(formData);


    console.log(formData);

    console.log('avant fetch');
    fetch('./script/send_score.php', createFetchOptions(formData))
        .then(response => { return response.text() }) //then(result) //transform le body de la reponse en text classique   // json stringify c'est pour convertif un objec JS en string
    console.log("après fetch")
}



//./include/send_score.php