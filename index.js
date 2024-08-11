$(document).ready(function () {
  $(".slider-img").on("click", function () {
      $(".slider-img").removeClass("active");
      $(this).addClass("active");
  });
});






// Heading Animation
const animatedHeading = document.querySelector('.animated-heading');
animatedHeading.classList.add('show');



//Feedback Animation
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








//products animation
document.addEventListener("DOMContentLoaded", function() {
  const observerOptions = {
    root: null, // Use the viewport as the container
    rootMargin: "0px",
    threshold: 0.2 // Trigger when 20% of the element is visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("animate");
          observer.unobserve(entry.target);
        }, index * 100); // Delay each item by 100ms
      }
    });
  }, observerOptions);

  document.querySelectorAll('.product-item').forEach(item => {
    observer.observe(item);
  });
});



//products animation
document.addEventListener("DOMContentLoaded", function() {
  const observerOptions = {
    root: null, // Use the viewport as the container
    rootMargin: "0px",
    threshold: 0.2 // Trigger when 20% of the element is visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("animate");
          observer.unobserve(entry.target);
        }, index * 100); // Delay each item by 100ms
      }
    });
  }, observerOptions);

  document.querySelectorAll('.feature').forEach(item => {
    observer.observe(item);
  });
});