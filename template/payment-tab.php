<?php
$totalPrice = $templateParams["price"];
?>
<section class="container my-5">
    <h1 class="text-center mb-4">Payment</h1>
    <p class="text-center">You are about to pay: <span class="fw-bold"><?php echo formatPrice($totalPrice); ?></span></p>
    <form action="process-order.php" method="POST" class="mx-auto col-sm-6 col-md-4">
        <div class="mb-3">
            <label for="cardNumber" class="form-label">Card number:</label>
            <input type="text" id="cardNumber" name="cardNumber" class="form-control" pattern="\d{16}" maxlength="16" placeholder="1111222233334444" required />
        </div>
        <div class="mb-3">
            <label for="expiryDate" class="form-label">Expiry date:</label>
            <input type="text" id="expiryDate" name="expiryDate" class="form-control" pattern="\d{2}/\d{2}" placeholder="MM/YY" required />
        </div>
        <div class="mb-3">
            <label for="cvv" class="form-label">CVV:</label>
            <input type="password" id="cvv" name="cvv" class="form-control" pattern="\d{3}" maxlength="3" placeholder="123" required />
        </div>
        <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>" />
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Pay now</button>
        </div>
    </form>
</section>