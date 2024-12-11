<h2 class="text-center my-4">Cart</h2>
<?php if(empty($templateParams["products-cart"])){ ?>
    <h3 class="text-center">Your cart is empty</h3>
<?php } else {?>
<div class="container">
    <ul class="list-group" id="cart-list">
        <?php $totalPrice = 0; ?>
        <?php foreach($templateParams["products-cart"] as &$product): ?>
            <li class="list-group-item" data-product-id="<?php echo $product["customProductId"]; ?>">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <img src="<?php echo UPLOAD_DIR."products/".$product["image"][0]["imageUrl"]; ?>" 
                             alt="<?php echo $product["name"]; ?>" 
                             class="img-thumbnail" 
                             style="max-width: 100%; height: auto;">
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-1">
                            <?php 
                            echo $product["name"]; 
                            foreach($product["options"] as $option) {
                                echo " ".$option["details"];
                            }
                            ?>
                        </h5>
                        <div class="input-group input-group-sm w-50">
                            <label for="quantity" class="input-group-text">Qty:</label>
                            <input type="number" 
                                   id="quantity" 
                                   name="quantity" 
                                   min="1" max="6" 
                                   step="1" 
                                   value="<?php echo $product["amount"]; ?>" 
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <p class="mb-0"><strong>Unit Price: $<?php echo $product["configuredPrice"]; ?></strong></p>
                        <?php if($product["discount"]): 
                            $newFinalPrice = $product["configuredPrice"] - $product["discount"]["amount"];
                            $dbh->updateFinalPrice($product["customProductId"], $newFinalPrice);
                        ?>
                            <p class="text-danger mb-0">Discount: -$<?php echo $product["discount"]["amount"]; ?></p>
                            <p class="mb-0"><strong>Total: $<?php echo $product["finalPrice"] * $product["amount"]; ?></strong></p>
                        <?php else: ?>
                            <p class="mb-0"><strong>Total: $<?php echo $product["configuredPrice"] * $product["amount"]; ?></strong></p>
                        <?php endif; ?>
                        <button class="btn btn-danger btn-sm remove-product">Remove</button>
                    </div>
                </div>
            </li>
            <?php $totalPrice += ($product["finalPrice"] * $product["amount"]); ?>
        <?php endforeach; ?>
    </ul>
    <p class="text-end mt-3 total"><strong>Your bag total is: $<?php echo $totalPrice; ?></strong></p>
    <form action="payment.php" method="POST" class="text-end">
        <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</div>
<?php } ?>
