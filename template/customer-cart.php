<section class="container my-5">
    <h1 class="text-center my-5">Your Cart</h1>
    <?php if (empty($templateParams["cart-products"])): ?>
        <div class="text-center my-4">
            <h2 class="display-6">Nothing to show</h2>
            <p class="text-muted">Haven't found anything interesting yet?</p>
        </div>
    <?php else: ?>
        <ul class="list-group cart-product-list">
            <?php $totalPrice = 0; ?>
            <?php foreach ($templateParams["cart-products"] as $product): ?>
                <li class="list-group-item" data-product-id="<?php echo $product["customProductId"]; ?>">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="me-md-3 m-2">
                            <img src="<?php echo $product["image"]; ?>" alt="Image of <?php echo $product["name"]; ?>" class="img-thumbnail cart-thumbnail" />
                        </div>
                        <div class="flex-grow-1 me-md-3">
                            <h2 class="mb-2 h5"><?php echo $product["name"]; ?></h2>
                            <p class="text-muted mb-2 small">
                                <?php foreach ($product["options"] as $option): ?>
                                    <?php echo $option["details"]; ?><br />
                                <?php endforeach; ?>
                            </p>
                            <div class="input-group input-group-sm col-auto w-auto">
                                <label for="quantity-<?php echo $product["customProductId"]; ?>" class="input-group-text">Quantity:</label>
                                <input type="number" id="quantity-<?php echo $product["customProductId"]; ?>" name="quantity" min="1" max="6" step="1" value="<?php echo $product["amount"]; ?>" class="form-control quantity-selector" />
                            </div>
                        </div>
                        <div class="mt-3 ms-auto text-end text-md-end text-center w-100 w-md-auto">
                            <p class="mb-1 fw-bold">Unit Price: $<?php echo formatPrice($product["configuredPrice"]); ?></p>
                            <?php if ($product["discount"]):
                                $newFinalPrice = $product["configuredPrice"] - $product["discount"]["amount"];
                                $dbh->updateFinalPrice($product["customProductId"], $newFinalPrice);
                            ?>
                                <p class="text-danger mb-1">Discount per unit: -$<?php echo formatPrice($product["discount"]["amount"]); ?></p>
                            <?php endif; ?>
                            <p class="fw-bold">Total: $<?php echo formatPrice($product["finalPrice"] * $product["amount"]); ?></p>
                            <button class="btn btn-danger btn-sm remove-product">Remove</button>
                        </div>
                    </div>
                </li>
                <?php $totalPrice += ($product["finalPrice"] * $product["amount"]); ?>
            <?php endforeach; ?>
        </ul>
        <p class="text-end mt-3 fw-bold">Your cart total is: <?php echo formatPrice($totalPrice); ?></p>
        <form action="payment.php" method="POST" class="text-end">
            <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>" />
            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>
    <?php endif; ?>
</section>