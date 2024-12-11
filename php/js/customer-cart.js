document.addEventListener('DOMContentLoaded', () => {
    const cartList = document.getElementById('cart-list');
    cartList.addEventListener('click', async (event) => {
        if (event.target.classList.contains("remove-product")) {
            const productItem = event.target.closest("li");
            const customProductId = productItem.getAttribute("data-product-id");

            try {
                const response = await fetch("handlers/product-cart-delete.php", {
                    method: "POST",
                    headers: {"Content-Type": "application/json"},
                    body: JSON.stringify({customProductId: customProductId})
                });
                const result = await response.json;
                if (result.success) {
                    productItem.remove();
                    alert('Product removed successfully!');
                } else {
                    alert('Failed to remove the product.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred while removing the product.');
            }
        }
    });
});