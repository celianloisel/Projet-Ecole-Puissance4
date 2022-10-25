const difficultyOption = [6, 8, 12, 20]
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
        var parent = document.getElementById('tableau');
        var tbl = document.createElement('table');
        var tbody = document.createElement('tbody');

        for (let i = 0; i < difficultyOption[difficultyChosen]; i++) {
            var row = document.createElement('tr')
            for (let j = 0; j < difficultyOption[difficultyChosen]; j++) {
                var cell = document.createElement("td")
                var img = document.createElement('img')
                img.src = './assets/images/theme/' + theme.value + '/'+ theme.value + ' (' + 1 +').png';
                img.style.display = "block"
                img.style.width = "100%";
                
                cell.appendChild(img)
                row.appendChild(cell)
            }
            tbody.appendChild(row)
        }
        tbl.appendChild(tbody)
        parent.appendChild(tbl)
    }
})