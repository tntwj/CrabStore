<h2>Cart</h2>
<ul>
    <?php
    $totalPrice = 0;
    if(isset($templateParams["products-cart"])): 
    ?>
        <?php foreach($templateParams["products-cart"] as $product): ?>
        <li>
            <img src="<?php echo UPLOAD_DIR.$product["image"][0]; ?>" alt="<?php echo $product["name"]; ?>"/>
            <h3><?php echo $product["name"]; ?></h3>
            <input type="number" id="quantity" name="quantity" min="1" max="6" step="1" value="<?php echo $product["amount"]; ?>">
            <p><?php echo "$".$product["finalPrice"] * $product["amount"]; ?></p>
        </li>
        <?php 
        $totalPrice += $product["finalPrice"] * $product["amount"]; 
        ?>
        <?php endforeach ?>
    <?php endif ?>
</ul>
<p><strong>Your bag total is: $<?php echo $totalPrice; ?></strong></p>
<form action="payment.php" method="POST">
    <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
    <button type="submit">Checkout</button>
</form>

