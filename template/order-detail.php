<?php $order = $templateParams["order"]; ?>
<h1 class="text-center my-4">Order #<?php echo $orderId; ?></h1>
<?php
$totalPrice = 0;
?>
<div class="container">
    <div class="row">
        <?php foreach($templateParams["order-products"] as $product): ?>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card border-light-subtle shadow h-100">
                <a href="product.php?id=<?php echo $product["productId"]?>">
                    <img src="<?php echo $product["image"]; ?>" class="card-img-top" alt="Image of <?php echo $product["information"]["name"]; ?>" />
                </a>
                <div class="card-body">
                    <h2 class="card-title h4"><?php echo $product["information"]["name"]; ?></h2>
                    <div>
                        <span class="lead">Configured specs:</span>
                        <ul>
                            <?php foreach($product["options"] as $option): ?>
                            <li><strong><?php echo $option["name"]; ?>:</strong> <?php echo $option["details"]; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <p class="card-text m-0"><span class="fw-bold">Price:</span> <?php echo formatPrice($product["finalPrice"]); ?></p>
                    <p class="card-text m-0"><span class="fw-bold">Quantity:</span> <?php echo $product["amount"]; ?></p>
                </div>
            </div>
        </div>
        <?php $totalPrice += (($product["finalPrice"] * $product["amount"])); ?>
        <?php endforeach ?>
    </div>
    <div class="row mt-4">
        <h2>Order Details</h2>
        <ul class="list-group">
            <li class="list-group-item"><span class="fw-bold">Status: </span><span class="fw-bold <?php echo getBadgeClass($order["orderStatus"]); ?>"><?php echo $order["orderStatus"]; ?></span>
            <li class="list-group-item"><span class="fw-bold">Order Date: </span><?php echo formatDate($order["orderDate"]); ?></li>
            <li class="list-group-item"><span class="fw-bold">Delivery Date: </span><?php echo $order["deliveryDate"] ? $order["deliveryDate"] : "Yet to arrive"; ?></li>
            <li class="list-group-item"><span class="fw-bold">Total Price: </span><?php echo formatPrice($totalPrice); ?></li>
        </ul>
    </div>
</div>
