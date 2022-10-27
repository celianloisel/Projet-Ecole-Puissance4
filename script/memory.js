const difficultyOption = [6, 8, 12, 20]
const carte = [];
var themeChosen = null;
var difficultyChosen = null;
var card;
var move = 0;

const theme = document.querySelector('#theme')

theme.addEventListener('change', () => {
    themeChosen = theme.value;
})


const difficulty = document.querySelector('#difficulty')

difficulty.addEventListener('change', () => {
    difficultyChosen = difficulty.selectedIndex - 1;
})


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

function card2(card) {
    let card2 = document.getElementById(card)

    card2.style.opacity = '100%'

    move++

    if (move == 1) {
        card3 = card2
    } else if (move == 2) {
        var valueCard2 = card2.getAttribute('value')
        var valueCard3 = card3.getAttribute('value') 
        
        if (valueCard2 != valueCard3) {
            setTimeout(() => {
                card2.style.opacity = '0%'
                card3.style.opacity = '0%'

                move = 0
            }, 1000)
        } else {
            move = 0
        }
    }
}


const play = document.querySelector('#play')

play.addEventListener('click', (event) => {
    event.preventDefault();

    if (themeChosen == null || difficultyChosen == null) {
        var menu = document.getElementById('errorMessage')
        var errorMessage = document.createElement("p")
        const errorText = document.createTextNode("Veuillez choisir un difficulter et un theme !");

        errorMessage.appendChild(errorText)
        menu.appendChild(errorMessage)
    } else {

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

                img.setAttribute('id', imgNb)
                img.setAttribute("value", carte[random - 1])
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

function startTimer() {
    let seconds = 0;
    let minutes = 0;
    let seconds_string = '';
    let minutes_string = '';
    let timer;

    timer = setInterval(() => {
        seconds > 58 ? ((minutes += 1), (seconds = 0)) : (seconds += 1);
        seconds_string = seconds > 9 ? `${seconds}` : `0${seconds}`;
        minutes_string = minutes > 9 ? `${minutes}` : `0${minutes}`;
        time.innerHTML = `${minutes_string}:${seconds_string}`;
    }, 1000);
}