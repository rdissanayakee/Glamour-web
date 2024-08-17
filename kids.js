// Search Bar Animation 
document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.querySelector('.search__icon');
    const searchInput = document.querySelector('.search__input');
  
    searchIcon.addEventListener('click', function() {
        searchInput.focus();
    });
  
    searchInput.addEventListener('focus', function() {
        searchIcon.style.transform = 'rotate(90deg)';
        searchIcon.style.color = '#007bff';
    });
  
    searchInput.addEventListener('blur', function() {
        if (searchInput.value === '') {
            searchIcon.style.transform = 'rotate(0deg)';
            searchIcon.style.color = '#999';
        }
    });
  });
  
  //Text Animation
  document.addEventListener('DOMContentLoaded', function() {
    const heroSection = document.querySelector('.hero-section');
    const headings = heroSection.querySelectorAll('.ml12');
    const button = heroSection.querySelector('button');
  
    // Use GSAP for animations
    gsap.fromTo(button, 
        { opacity: 0, y: 20 }, 
        { 
            opacity: 1, 
            y: 0, 
            duration: 0.6, 
            ease: 'power2.out',
            scrollTrigger: {
                trigger: heroSection,
                start: 'top 80%', 
                toggleActions: 'play none none none'
            }
        }
    );
  
    // Animation for headings
    gsap.fromTo(headings, 
        { opacity: 0, y: 20 }, 
        { 
            opacity: 1, 
            y: 0, 
            duration: 1.5, 
            ease: 'power2.out', 
            stagger: 0.2, 
            scrollTrigger: {
                trigger: heroSection,
                start: 'top 80%', 
                toggleActions: 'play none none none'
            }
        }
    );
  });
  
  //products animation
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
  });
  // Pop-up Notification for Add-to-Cart
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', function() {
          const popup = document.getElementById('popupNotification');
          const itemName = button.closest('.product-item').querySelector('.product-info h5').innerText;
          document.getElementById('itemName').innerText = itemName;
          popup.classList.add('show');
          
          setTimeout(() => {
              popup.classList.remove('show');
          }, 3000); // Hide after 3 seconds
      });
  });
});
