<?php $order = $templateParams["order"]; ?>
<h2 class="text-center my-4">Order #<?php echo $orderId; ?></h2>
<?php
$totalPrice = 0;
$customPrice = 0;
?>
<div class="container">
    <div class="row">
        <?php foreach($templateParams["order-products"] as $product): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="<?php echo UPLOAD_DIR."products/".$product["images"][0]["imageUrl"]; ?>" 
                         class="card-img-top" 
                         alt="<?php echo $product["information"]["name"]; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product["information"]["name"]; ?></h4>
                        <?php foreach($product["options"] as $option): ?>
                        <p class="card-text"><strong><?php echo strtok($option["name"], ' ') ?>:</strong> <?php echo $option["details"] ?></p>
                        <?php $customPrice += $option["price"]; ?>
                        <?php endforeach ?>

                        <p class="card-text"><strong>Price:</strong> $<?php echo $product["finalPrice"] + $customPrice; ?></p>
                        <p class="card-text"><strong>Quantity:</strong> <?php echo $product["amount"]; ?></p>
                    </div>
                </div>
            </div>
            <?php 
            $totalPrice += (($product["finalPrice"] * $product["amount"]) + $customPrice); 
            $customPrice = 0;
            ?>
        <?php endforeach ?>
    </div>

    <div class="mt-4">
        <h4>Order Details</h4>
        <ul class="list-group">
            <li class="list-group-item"><strong>Status:</strong> <?php echo $order["orderStatus"]; ?></li>
            <li class="list-group-item"><strong>Order Date:</strong> <?php echo $order["orderDate"]; ?></li>
            <li class="list-group-item"><strong>Delivery Date:</strong> <?php echo $order["deliveryDate"]; ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?php echo $order["email"]; ?></li>
            <li class="list-group-item"><strong>Total Price:</strong> <?php echo $totalPrice; ?></li>
        </ul>
    </div>
</div>
