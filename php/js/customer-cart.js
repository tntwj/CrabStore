document.addEventListener('DOMContentLoaded', () => {
    const cartList = document.getElementById('cart-list');
    cartList.addEventListener('click', (event) => {
        if (event.target.classList.contains('remove-product')) {
            const productItem = event.target.closest('li');
            const productId = productItem.getAttribute('data-product-id');
            
            // Send a request to remove the product from the cart (AJAX or form submission logic needed here)
            // For demo purposes, just remove the item from the DOM
            productItem.remove();
            
            // Optionally, recalculate the total price dynamically
            let totalPrice = 0;
            document.querySelectorAll('#cart-list li').forEach(item => {
                const totalElement = item.querySelector('.text-end strong:last-child');
                if (totalElement) {
                    const productTotal = parseFloat(totalElement.textContent.replace('$', ''));
                    totalPrice += productTotal;
                }
            });
            document.querySelector('.text-end strong').textContent = `Your bag total is: $${totalPrice.toFixed(2)}`;
        }
    });
});