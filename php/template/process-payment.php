<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $totalPrice = floatval($_POST["totalPrice"]);
}
?>
<h2>Payment</h2>
<p>total amount <?php echo $totalPrice; ?></p>
<form action="process_payment.php" method="POST">
    <label for="cardNumber">Number of card:</label>
    <input type="text" id="cardNumber" name="cardNumber" pattern="\d{16}" maxlength="16" placeholder="1234 5678 9012 3456" required>

    <label for="expiryDate">Expiry date:</label>
    <input type="text" id="expiryDate" name="expiryDate" pattern="\d{2}/\d{2}" placeholder="MM/YY" required>

    <label for="cvv">CVV:</label>
    <input type="password" id="cvv" name="cvv" pattern="\d{3}" maxlength="3" placeholder="123" required>

    <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">

    <button type="submit">Pay now</button>
</form>
