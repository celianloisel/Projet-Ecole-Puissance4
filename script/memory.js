
/////////// flip
const cards = document.querySelectorAll('.memory-card');

function flipCard() {
  this.classList.toggle('flip');
}

cards.forEach(card => card.addEventListener('click', flipCard));


////////// timer
const time = document.querySelector('.time');


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







