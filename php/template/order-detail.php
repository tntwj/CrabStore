<?php $order = $templateParams["order"]; ?>
<h2 class="text-center my-4">Order #<?php echo $orderId; ?></h2>

<div class="container">
    <div class="row">
        <?php foreach($templateParams["order-products"] as $product): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="<?php echo UPLOAD_DIR.$product["images"][0]["imageUrl"]; ?>" 
                         class="card-img-top" 
                         alt="<?php echo $product["information"][0]["name"]; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $product["information"][0]["name"]; ?></h4>
                        <p class="card-text"><strong>Price:</strong> $<?php echo $product["finalPrice"]; ?></p>
                        <p class="card-text"><strong>Quantity:</strong> <?php echo $product["amount"]; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="mt-4">
        <h4>Order Details</h4>
        <ul class="list-group">
            <li class="list-group-item"><strong>Status:</strong> <?php echo $order["orderStatus"]; ?></li>
            <li class="list-group-item"><strong>Order Date:</strong> <?php echo $order["orderDate"]; ?></li>
            <li class="list-group-item"><strong>Delivery Date:</strong> <?php echo $order["deliveryDate"]; ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?php echo $order["email"]; ?></li>
        </ul>
    </div>
</div>
