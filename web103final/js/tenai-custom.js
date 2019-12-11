
// Typewriter Plugin
$(document).ready(function(){
    $('#typewriteText').typewrite({
        speed: 22,
        actions: [
            {type: 'You have a beautiful new space to create. '},
            {type: '<br>'},
            {delay: 500},
            {type: 'Don’t let the math get in the way.  '},
            {type: '<br>'},
            {delay: 300},
            {type: 'We’ve got you covered. '}
        ]
    });
});


// Anime.js Plugin
var textWrapper = document.querySelector('.ml13');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
.add({
    targets: '.ml13 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 800 + 30 * i
}).add({
    targets: '.ml13 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 2000,
    delay: (el, i) => 10000 + 30 * i
});


// Create accordian style info boxes
var accControl = document.getElementsByClassName("accordion-control");
var i;

// Toggle active class
for (i = 0; i < accControl.length; i++) {
  accControl[i].addEventListener("click", function() {
    this.classList.toggle("actives");

    // Hide/ Show Toggle
    var accPanel = this.nextElementSibling;
    if (accPanel.style.display === "block") {
      accPanel.style.display = "none";
    } else {
      accPanel.style.display = "block";
    }
  });
}

// Make button to jump to top of page
var topbutton = document.getElementById("totop");

    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topbutton.style.display = "block";
  } else {
    topbutton.style.display = "none";
  }
}

    // When the user clicks on the button, scroll to the top of the document
function jumpTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Message alert when contact form is submitted
function formSubmit() {
    alert("Thank you for your message.  We will be in touch shortly!");
}