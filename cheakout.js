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
document.addEventListener("DOMContentLoaded", function() {
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

    // Scroll to top button
  document.addEventListener('DOMContentLoaded', () => {
    const scrollToTopButton = document.getElementById('scrollToTopButton');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopButton.classList.add('visible');
        } else {
            scrollToTopButton.classList.remove('visible');
        }
    });

    scrollToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});


//checkout

document.addEventListener("DOMContentLoaded", function() {
    const step1Form = document.getElementById('checkout-step1-form');
    const step2Form = document.getElementById('shipping-step2-form');
    const step3Form = document.getElementById('payment-step3-form');

    // Hide Step 2 and Step 3 initially
    document.querySelector('.checkout-step2-wrapper').style.display = 'none';
    document.querySelector('.checkout-step3-wrapper').style.display = 'none';

    // Step 1 Form Submission
    step1Form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Perform validation
        if (validateStep1()) {
            // Hide Step 1, Show Step 2
            document.querySelector('.checkout-step1-wrapper').style.display = 'none';
            document.querySelector('.checkout-step2-wrapper').style.display = 'flex';
        }
    });

    function validateStep1() {
        // Basic validation example
        const firstName = document.getElementById('first-name').value.trim();
        const lastName = document.getElementById('last-name').value.trim();
        const address = document.getElementById('address').value.trim();
        const city = document.getElementById('city').value.trim();
        const state = document.getElementById('state').value.trim();
        const zipcode = document.getElementById('zipcode').value.trim();
        const email = document.getElementById('email').value.trim();

        if (firstName === '' || lastName === '' || address === '' || city === '' || state === '' || zipcode === '' || email === '') {
            alert('Please fill in all required fields.');
            return false;
        }

        if (!validateEmail(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        // Additional validation logic can be added here

        return true;
    }

    function validateEmail(email) {
        // Basic email validation using regex
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    // Step 2 Form Submission
    step2Form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Perform validation
        if (validateStep2()) {
            // Hide Step 2, Show Step 3
            document.querySelector('.checkout-step2-wrapper').style.display = 'none';
            document.querySelector('.checkout-step3-wrapper').style.display = 'flex';

            // Update Shipping Summary (optional)
            updateShippingSummary();
        }
    });

    function validateStep2() {
        // Basic validation example (shipping method)
        const shippingMethod = document.querySelector('input[name="shippingMethod"]:checked');

        if (!shippingMethod) {
            alert('Please select a shipping method.');
            return false;
        }

        return true;
    }

    function updateShippingSummary() {
        // Example function to update shipping summary based on selected shipping method
        const shippingMethod = document.querySelector('input[name="shippingMethod"]:checked').value;
        let shippingCost = 0;

        if (shippingMethod === 'Standard Shipping') {
            shippingCost = 5.00;
        } else if (shippingMethod === 'Express Shipping') {
            shippingCost = 15.00;
        }

        document.getElementById('shipping').textContent = '$' + shippingCost.toFixed(2);

        // Update Total (if applicable)
        updateTotal();
    }

    // Step 3 Form Submission
    step3Form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Perform validation
        if (validateStep3()) {
            // Example: Process Payment (not implemented in this example)
            alert('Payment processed successfully!'); // Replace with actual payment processing logic

            // Optionally redirect to a thank you page or clear form
        }
    });

    function validateStep3() {
        // Basic validation example (payment information)
        const cardNumber = document.getElementById('card-number-step3').value.trim();
        const expiryDate = document.getElementById('expiry-date-step3').value.trim();
        const cvv = document.getElementById('cvv-step3').value.trim();

        if (cardNumber === '') {
            alert('Please enter your card number.');
            return false;
        }

        // Card number validation (simple example)
        if (!validateCardNumber(cardNumber)) {
            alert('Please enter a valid card number.');
            return false;
        }

        if (expiryDate === '') {
            alert('Please enter the expiry date.');
            return false;
        }

        // Expiry date validation (simple example)
        if (!validateExpiryDate(expiryDate)) {
            alert('Please enter a valid expiry date in MM/YY format.');
            return false;
        }

        if (cvv === '') {
            alert('Please enter your CVV.');
            return false;
        }

        // CVV validation (simple example)
        if (!validateCVV(cvv)) {
            alert('Please enter a valid CVV.');
            return false;
        }

        return true;
    }

    function validateCardNumber(cardNumber) {
        // Simple card number validation (you might want to use a library for more thorough validation)
        const regex = /^[0-9]{16}$/; // 16 digits
        return regex.test(cardNumber);
    }

    function validateExpiryDate(expiryDate) {
        // Simple expiry date validation (MM/YY format)
        const regex = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/; // MM/YY
        return regex.test(expiryDate);
    }

    function validateCVV(cvv) {
        // Simple CVV validation (3 or 4 digits)
        const regex = /^[0-9]{3,4}$/;
        return regex.test(cvv);
    }

    // Back Buttons (Step 2 to Step 1, Step 3 to Step 2)
    const backToInfoBtn = document.querySelector('.button-step2.back-to-info');
    const backToShippingBtn = document.querySelector('.button-step3.back-to-shipping');

    if (backToInfoBtn) {
        backToInfoBtn.addEventListener('click', function() {
            // Show Step 1, Hide Step 2
            document.querySelector('.checkout-step2-wrapper').style.display = 'none';
            document.querySelector('.checkout-step1-wrapper').style.display = 'flex';
        });
    }

    if (backToShippingBtn) {
        backToShippingBtn.addEventListener('click', function() {
            // Show Step 2, Hide Step 3
            document.querySelector('.checkout-step3-wrapper').style.display = 'none';
            document.querySelector('.checkout-step2-wrapper').style.display = 'flex';
        });
    }

    // Example function to update Total in Summary
    function updateTotal() {
        const subtotal = parseFloat(document.getElementById('subtotal').textContent.replace('$', ''));
        const shippingCost = parseFloat(document.getElementById('shipping').textContent.replace('$', ''));
        const total = subtotal + shippingCost;

        document.getElementById('total').textContent = '$' + total.toFixed(2);
    }
  });

