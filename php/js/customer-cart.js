document.addEventListener('DOMContentLoaded', () => {
    const cartList = document.getElementById('cart-list');
    if (cartList !== null) {
        cartList.addEventListener('click', async (event) => {
            if (event.target.classList.contains("remove-product")) {
                const productItem = event.target.closest("li");
                const customProductId = productItem.getAttribute("data-product-id");
    
                try {
                    const response = await fetch("handlers/product-cart-delete.php", {
                        method: "POST",
                        headers: {"Content-Type": "application/json"},
                        body: JSON.stringify({customProductId: customProductId}), 
                    });
                    const result = await response.json();
                    if (result.success) {
                        location.reload();
                    } else {
                        alert(result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert(error.message);
                }
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const cartList = document.getElementById('cart-list');
    if (cartList !== null) {
        cartList.addEventListener("change", async (event) => {
            if (event.target.classList.contains(input-group-text)) {
                const productItem = event.target.closest("li");
                const customProductId = productItem.getAttribute("data-product-id");
                const qta = event.target.value;
                try {
                    const response = await fetch("handlers/update-cart-qta.php", {
                        method: "POST",
                        headers: {"Content-Type": "application/json"},
                        body: JSON.stringify({customProductId: customProductId, quantity: qta})
                    });
                    const result = await response.json();
                    if (result.success) {
                        location.reload();
                    } else {
                        alert(result.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert(error.message);
                }
            }
        });
    }
});