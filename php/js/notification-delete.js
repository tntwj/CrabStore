document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function() {
            const notificationId = this.getAttribute("data-notification-id");
            const accordionItem = this.closest(".accordion-item");
            if (confirm("Are you sure you want to delete this notification?")) {
                fetch("handlers/notification-delete.php", {
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
                        accordionItem.remove();
                        console.log("Notification deleted from the database.");
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
});
