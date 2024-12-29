document.addEventListener("DOMContentLoaded", function() {
    const accordionContainer = document.getElementById("notificationsAccordion");
    if (accordionContainer) {
        accordionContainer.addEventListener("show.bs.collapse", function(event) {
            const accordionItem = event.target.closest(".accordion-item");
            const button = accordionItem.querySelector(".accordion-button");
            const notificationId = button.getAttribute("data-notification-id");
            const badge = button.querySelector(".badge");
    
            fetch("notification-handler.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ action: "markAsRead", id: notificationId }),
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success && badge) {
                        badge.remove();
                    }
                })
                .catch(error => console.error("Error:", error));
        });

        accordionContainer.addEventListener("click", function(event) {
            if (event.target.matches(".delete-btn")) {
                const button = event.target;
                const notificationId = button.getAttribute("data-notification-id");
                const accordionItem = button.closest(".accordion-item");
    
                fetch("notification-handler.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ action: "delete", id: notificationId }),
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            accordionItem.remove();
                            if (!accordionContainer.querySelector(".accordion-item")) {
                                const parentNode = accordionContainer.parentElement;
                                accordionContainer.remove();
                
                                const updateMessage = document.createElement("div");
                                updateMessage.classList.add("text-center", "my-5");
                                updateMessage.innerHTML = `
                                    <h2 class="display-6">Nothing to show</h2>
                                    <p class="text-muted">You have no notifications at this moment.</p>
                                `;
                                parentNode.appendChild(updateMessage);
                            }
                        } else {
                            console.error("Failed to delete notification: ", data.error);
                        }
                    })
                    .catch(error => console.error("Error:", error));
            }
        });
    }
});