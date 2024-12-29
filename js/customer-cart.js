document.addEventListener("DOMContentLoaded", () => {
    const cartList = document.querySelector(".cart-product-list");

    if (cartList !== null) {
        cartList.addEventListener("click", async (event) => {
            if (event.target.classList.contains("remove-product")) {
                const productItem = event.target.closest("li");
                const customProductId = productItem.getAttribute("data-product-id");

                try {
                    const response = await fetch("cart-handler.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify({
                            action: "removeProduct",
                            customProductId: customProductId
                        })
                    });
                    const result = await response.json();

                    if (result.success) {
                        location.reload();
                    } else {
                        console.error(result.message);
                    }
                } catch (error) {
                    console.error("Error:", error);
                }
            }
        });

        cartList.addEventListener("change", async (event) => {
            if (event.target.name === "quantity") {
                const productItem = event.target.closest("li");
                const customProductId = productItem.getAttribute("data-product-id");
                const quantity = event.target.value;

                try {
                    const response = await fetch("cart-handler.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: JSON.stringify({
                            action: "updateQuantity",
                            customProductId: customProductId,
                            quantity: quantity
                        })
                    });
                    const result = await response.json();
                    if (result.success) {
                        location.reload();
                    } else {
                        console.error(result.message);
                    }
                } catch (error) {
                    console.error("Error:", error);
                }
            }
        });
    }
});