<h2 class="text-center my-4">Cart</h2>
<?php if(empty($templateParams["products-cart"])){ ?>
    <h3 class="text-center">Your cart is empty</h3>
<?php } else {?>
<div class="container">
    <ul class="list-group">
        <?php
        $totalPrice = 0;
        ?>
        <?php foreach($templateParams["products-cart"] as &$product): ?>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="<?php echo UPLOAD_DIR."products/".$product["image"][0]["imageUrl"]; ?>" 
                            alt="<?php echo $product["name"]; ?>" 
                            class="img-thumbnail me-3" 
                            style="width: 100px; height: auto;">
                    <div>
                        <h5 class="mb-1"><?php 
                        echo $product["name"]; 
                        foreach($product["options"] as $option) {
                            echo " ".$option["details"];
                        }
                        ?></h5>
                        <input type="number" 
                                id="quantity" 
                                name="quantity" 
                                min="1" max="6" 
                                step="1" 
                                value="<?php echo $product["amount"]; ?>" 
                                class="form-control form-control-sm w-50">
                    </div>
                </div>
                <p class="mb-0"><strong><?php echo "$".$product["finalPrice"] * $product["amount"]; ?></strong></p>
            </li>
            <?php 
            $totalPrice += ($product["finalPrice"] * $product["amount"]); 
            ?>
        <?php endforeach ?>
    </ul>
    <p class="text-end mt-3"><strong>Your bag total is: $<?php echo $totalPrice; ?></strong></p>
    <form action="payment.php" method="POST" class="text-end">
        <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</div>
<?php } ?>