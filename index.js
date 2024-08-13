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




// Get the overlay text element
const overlayText = document.querySelector('.overlay-text');

// Define the animation
const animation = overlayText.animate([
  {
    opacity: 0,
    transform: 'translate(-50%, -50%) scale(0.5)',
  },
  {
    opacity: 1,
    transform: 'translate(-50%, -50%) scale(1)',
  },
], {
  duration: 2000,
  easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
  fill: 'forwards',
});

// Play the animation
animation.play();





document.addEventListener("DOMContentLoaded", function() {
  const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0.2
  };

  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
              setTimeout(() => {
                  entry.target.classList.add("animate");
                  observer.unobserve(entry.target);
              }, index * 100);
          }
      });
  }, observerOptions);

  document.querySelectorAll('.product-item').forEach(item => {
      observer.observe(item);
  });

  // Handle pop-up notification for add-to-cart
  document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function() {
          const popup = document.getElementById('popupNotification');
          popup.classList.add('show');
          
          setTimeout(() => {
              popup.classList.remove('show');
          }, 3000); // Hide after 3 seconds
      });
  });
});
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function() {
          const popup = document.getElementById('popupNotification');
          const itemName = button.closest('.product-item').querySelector('.product-info h5').innerText;
          document.getElementById('itemName').innerText = itemName;
          popup.classList.add('show');


      });
  });
});







































































































































































































































































































































































































































































































































































































































































































































































































































