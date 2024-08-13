document.addEventListener("DOMContentLoaded", function () {
    // Select the About Us container
    const aboutUsSection = document.querySelector('.about-us-container');

    // Create an IntersectionObserver instance
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the class to trigger the animations
                aboutUsSection.classList.add('animate');
                // Stop observing once the animation is triggered
                observer.unobserve(aboutUsSection);
            }
        });
    });

    // Start observing the "About Us" section
    observer.observe(aboutUsSection);
});


