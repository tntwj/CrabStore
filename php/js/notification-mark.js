document.addEventListener("DOMContentLoaded", function() {
    const notificationAccordion = document.getElementById("notificationsAccordion");

    notificationAccordion.addEventListener("show.bs.collapse", function(event) {
        const accordionItem = event.target.closest(".accordion-item");
        if (!accordionItem) return;
        const button = accordionItem.querySelector(".accordion-button");
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
                body: JSON.stringify({
                    notificationId: notificationId
                })
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
});
