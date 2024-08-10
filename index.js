$(document).ready(function () {
  $(".slider-img").on("click", function () {
      $(".slider-img").removeClass("active");
      $(this).addClass("active");
  });
});



const feedbackContainer = document.querySelector('.feedback-container');
const preFdbBtn = document.querySelector('.pre-fdb-btn');
const nxtFdbBtn = document.querySelector('.nxt-fdb-btn');

const feedbackCards = document.querySelectorAll('.feedback-card');

let currentCardIndex = 0;
function slideNext() {
  currentCardIndex = (currentCardIndex + 1) % feedbackCards.length;
  feedbackContainer.scrollLeft = feedbackCards[currentCardIndex].offsetLeft;
}

function slidePrev() {
  currentCardIndex = (currentCardIndex - 1 + feedbackCards.length) % feedbackCards.length;
  feedbackContainer.scrollLeft = feedbackCards[currentCardIndex].offsetLeft;
}

preFdbBtn.addEventListener('click', slidePrev);
nxtFdbBtn.addEventListener('click', slideNext);