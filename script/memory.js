/////////// Brouillon
const cards = document.querySelectorAll('.memory-card');

function flipCard() {
    this.classList.toggle('flip');
}

cards.forEach(card => card.addEventListener('click', flipCard));

/////////// Propre
const difficultyOption = [6, 8, 12, 20]
const carte = [];
var themeChosen = null;
var difficultyChosen = null;

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

        for (let i = 0; i < difficultyOption[difficultyChosen]; i++) {
            var row = document.createElement('tr')
            for (let j = 0; j < difficultyOption[difficultyChosen]; j++) {
                var cell = document.createElement("td")
                var img = document.createElement('img')

                var random = Math.floor(Math.random() * (carte.length - 1) + 1)
                img.src = './assets/images/theme/' + theme.value + '/' + theme.value + ' (' + carte[random - 1] + ').png';
                carte.splice(random - 1, 1)

                img.style.display = "block"
                img.style.width = "100%";
                img.style.height = "100%"

                img.setAttribute('onclick', 'startTimer()')

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