<?php
$totalPrice = 0;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $totalPrice = floatval($_POST["totalPrice"]);
}
?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Payment</h2>
    <p class="text-center">Total price: <strong>$<?php echo number_format($totalPrice, 2); ?></strong></p>
    <form action="process_payment.php" method="POST" class="mx-auto" style="max-width: 400px;">
        <div class="mb-3">
            <label for="cardNumber" class="form-label">Number of card:</label>
            <input type="text" 
                   id="cardNumber" 
                   name="cardNumber" 
                   class="form-control" 
                   pattern="\d{16}" 
                   maxlength="16" 
                   placeholder="1234 5678 9012 3456" 
                   required>
        </div>
        <div class="mb-3">
            <label for="expiryDate" class="form-label">Expiry date:</label>
            <input type="text" 
                   id="expiryDate" 
                   name="expiryDate" 
                   class="form-control" 
                   pattern="\d{2}/\d{2}" 
                   placeholder="MM/YY" 
                   required>
        </div>
        <div class="mb-3">
            <label for="cvv" class="form-label">CVV:</label>
            <input type="password" 
                   id="cvv" 
                   name="cvv" 
                   class="form-control" 
                   pattern="\d{3}" 
                   maxlength="3" 
                   placeholder="123" 
                   required>
        </div>
        <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
        <button type="submit" class="btn btn-primary w-100">Pay now</button>
    </form>
</div>
