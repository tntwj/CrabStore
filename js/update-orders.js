setInterval(function() {
    fetch("update-customer-orders.php", {
        method: "POST",
    })
        .then(response => response.text())
        .then(data => console.log("Server response:", data))
        .catch(error => console.error("Error:", error));
}, 10000);