window.alert("Hello! Nice to meet you my name is Hector Romero. Welcome to my personal page! Click Ok to reveal the magical script.");

var seconds = 0;
function startTimer()
{
   window.setInterval( "updateTime()", 1000 );
} 

function updateTime()
{
   ++seconds;                
   document.getElementById( "soFar" ).innerHTML = seconds;
}

window.addEventListener( "load", startTimer, false );

document.addEventListener("DOMContentLoaded", function() {
    const quotes = ['Keep going!', 'Stay positive!', 'You got this!'];
    const quoteElement = document.getElementById("quote");
    const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    quoteElement.textContent = randomQuote;
  });