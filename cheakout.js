document.addEventListener("DOMContentLoaded", function() {
    // Search Bar Animation
    const searchIcon = document.querySelector('.search__icon');
    const searchInput = document.querySelector('.search__input');

    if (searchIcon && searchInput) {
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
    }

    // Scroll to top button
    const scrollToTopButton = document.getElementById('scrollToTopButton');

    if (scrollToTopButton) {
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
    }

    // Checkout Process
    const step1Form = document.getElementById('checkout-step1-form');
    const step2Form = document.getElementById('shipping-step2-form');
    const step3Form = document.getElementById('payment-step3-form');

    if (step1Form && step2Form && step3Form) {
        const step2Wrapper = document.querySelector('.checkout-step2-wrapper');
        const step3Wrapper = document.querySelector('.checkout-step3-wrapper');

        if (step2Wrapper && step3Wrapper) {
            // Hide Step 2 and Step 3 initially
            step2Wrapper.style.display = 'none';
            step3Wrapper.style.display = 'none';
        }

        step1Form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (validateStep1()) {
                document.querySelector('.checkout-step1-wrapper').style.display = 'none';
                step2Wrapper.style.display = 'flex';
            }
        });

        step2Form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (validateStep2()) {
                step2Wrapper.style.display = 'none';
                step3Wrapper.style.display = 'flex';
                updateShippingSummary();
            }
        });

        step3Form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (validateStep3()) {
                alert('Payment processed successfully!');
            }
        });

        // Back Buttons
        const backToInfoBtn = document.querySelector('.button-step2.back-to-info');
        const backToShippingBtn = document.querySelector('.button-step3.back-to-shipping');

        if (backToInfoBtn) {
            backToInfoBtn.addEventListener('click', function() {
                step2Wrapper.style.display = 'none';
                document.querySelector('.checkout-step1-wrapper').style.display = 'flex';
            });
        }

        if (backToShippingBtn) {
            backToShippingBtn.addEventListener('click', function() {
                step3Wrapper.style.display = 'none';
                step2Wrapper.style.display = 'flex';
            });
        }

        function validateStep1() {
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

            return true;
        }

        function validateEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function validateStep2() {
            const shippingMethod = document.querySelector('input[name="shippingMethod"]:checked');

            if (!shippingMethod) {
                alert('Please select a shipping method.');
                return false;
            }

            return true;
        }

        function updateShippingSummary() {
            const shippingMethod = document.querySelector('input[name="shippingMethod"]:checked').value;
            let shippingCost = 0;

            if (shippingMethod === 'Standard Shipping') {
                shippingCost = 5.00;
            } else if (shippingMethod === 'Express Shipping') {
                shippingCost = 15.00;
            }

            document.getElementById('shipping').textContent = '$' + shippingCost.toFixed(2);
            updateTotal();
        }

        function validateStep3() {
            const cardNumber = document.getElementById('card-number-step3').value.trim();
            const expiryDate = document.getElementById('expiry-date-step3').value.trim();
            const cvv = document.getElementById('cvv-step3').value.trim();

            if (cardNumber === '' || expiryDate === '' || cvv === '') {
                alert('Please fill in all required fields.');
                return false;
            }

            if (!validateCardNumber(cardNumber)) {
                alert('Please enter a valid card number.');
                return false;
            }

            if (!validateExpiryDate(expiryDate)) {
                alert('Please enter a valid expiry date in MM/YY format.');
                return false;
            }

            if (!validateCVV(cvv)) {
                alert('Please enter a valid CVV.');
                return false;
            }

            return true;
        }

        function validateCardNumber(cardNumber) {
            const regex = /^[0-9]{16}$/;
            return regex.test(cardNumber);
        }

        function validateExpiryDate(expiryDate) {
            const regex = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/;
            return regex.test(expiryDate);
        }

        function validateCVV(cvv) {
            const regex = /^[0-9]{3,4}$/;
            return regex.test(cvv);
        }

        function updateTotal() {
            const subtotal = parseFloat(document.getElementById('subtotal').textContent.replace('$', ''));
            const shippingCost = parseFloat(document.getElementById('shipping').textContent.replace('$', ''));
            const total = subtotal + shippingCost;

            document.getElementById('total').textContent = '$' + total.toFixed(2);
        }
    }
});
