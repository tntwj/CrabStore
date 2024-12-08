document.addEventListener("DOMContentLoaded", function() {
    const accordionContainer = document.getElementById("notificationsAccordion");

    if (!accordionContainer) return;

    accordionContainer.addEventListener("show.bs.collapse", function(event) {
        const accordionItem = event.target.closest(".accordion-item");
        const button = accordionItem?.querySelector(".accordion-button");

        if (!button) return;

        const badge = button.querySelector(".badge");
        if (badge) {
            const notificationId = button.getAttribute("data-notification-id");
            if (!notificationId) {
                console.error("Notification ID not found.");
                return;
            }

            fetch("handlers/notification-mark.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ notificationId }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    badge.remove();
                    console.log("Notification marked as read successfully.");
                } else {
                    console.error("Failed to mark notification as read", data.error);
                }
            })
            .catch(error => console.error("Error:", error));
        }
    });

    accordionContainer.addEventListener("click", function(event) {
        if (event.target.matches(".delete-btn")) {
            const button = event.target;
            const notificationId = button.getAttribute("data-notification-id");
            const accordionItem = button.closest(".accordion-item");

            if (!accordionItem || !notificationId) {
                console.error("Accordion item or notification ID missing.");
                return;
            }

            fetch("handlers/notification-delete.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ notificationId }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    accordionItem.remove();
                    console.log("Notification deleted from the database.");

                    if (accordionContainer.querySelectorAll(".accordion-item").length === 0) {
                        const parentNode = accordionContainer.parentElement;
                        accordionContainer.remove();

                        const noNotificationsMessage = document.createElement("div");
                        noNotificationsMessage.classList.add("text-center", "my-5");
                        noNotificationsMessage.innerHTML = `
                            <h2 class="display-6">Nothing to show</h2>
                            <p class="text-muted">You have no notifications at this moment.</p>
                        `;
                        parentNode.appendChild(noNotificationsMessage);
                    }
                } else {
                    console.error("Failed to delete notification from the database:", data.error);
                    alert("Failed to delete the notification");
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("Error occurred while deleting the notification.");
            });
        }
    });
});
