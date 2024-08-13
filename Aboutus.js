document.addEventListener("DOMContentLoaded", function () {
    // Select the About Us container
    const aboutUsSection = document.querySelector('.about-us-container');

    // Proceed only if the About Us section is present
    if (aboutUsSection) {
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
    }
});

