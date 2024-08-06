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

    // Scroll to Top Button
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    window.addEventListener("scroll", function() {
        if (window.scrollY > 300) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    });

    scrollToTopBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
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

