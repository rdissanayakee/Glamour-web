document.addEventListener('DOMContentLoaded', function () {
    let lastRemovedItem = null;

    // Quantity Control
    const quantityButtons = document.querySelectorAll('.quantity-btn');

    quantityButtons.forEach(button => {
        button.addEventListener('click', function () {
            const quantityDisplay = this.parentElement.querySelector('.quantity-display');
            let quantity = parseInt(quantityDisplay.textContent);

            if (this.classList.contains('plus') && quantity < 10) {
                quantity++;
            } else if (this.classList.contains('minus') && quantity > 1) {
                quantity--;
            }

            quantityDisplay.textContent = quantity;
            updateCartTotal();
        });
    });

    // Remove Item
    const removeButtons = document.querySelectorAll('.remove-item');

    removeButtons.forEach(button => {
        button.addEventListener('click', function () {
            const item = this.closest('.cart-item');
            lastRemovedItem = item.cloneNode(true);
            item.remove();
            showUndoNotification();
            updateCartTotal();
        });
    });

    function showUndoNotification() {
        const undoNotification = document.querySelector('.undo-notification');
        undoNotification.style.display = 'block';

        setTimeout(() => {
            undoNotification.style.display = 'none';
        }, 5000);
    }


    // Undo Remove
    document.querySelector('.undo-btn').addEventListener('click', function () {
        if (lastRemovedItem) {
            document.querySelector('.cart-items').appendChild(lastRemovedItem);
            lastRemovedItem = null;
            updateCartTotal();
        }
        document.querySelector('.undo-notification').style.display = 'none';
    });

    // Update Cart Total
    function updateCartTotal() {
        let total = 0;
        const cartItems = document.querySelectorAll('.cart-item');

        cartItems.forEach(item => {
            const price = parseFloat(item.querySelector('.item-price').textContent.replace('$', ''));
            const quantity = parseInt(item.querySelector('.quantity-display').textContent);
            total += price * quantity;
        });

        document.querySelector('.summary-details p:nth-child(1)').textContent = `Subtotal: $${total.toFixed(2)}`;
        document.querySelector('.summary-details p:nth-child(3)').textContent = `Total: $${total.toFixed(2)}`;
    }
});
