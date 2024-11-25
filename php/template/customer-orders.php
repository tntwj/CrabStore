<h2 class="text-center my-4">Orders</h2>
<div class="container">
    <div class="row g-4">
        <?php foreach($templateParams["orders"] as $order): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="order.php?orderId=<?php echo $order["orderId"]; ?>" class="text-decoration-none d-block">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $order["orderId"]; ?></h5>
                            <p class="card-text"><strong>Status:</strong> <?php echo $order["orderStatus"]; ?></p>
                            <p class="card-text"><strong>Order Date:</strong> <?php echo $order["orderDate"]; ?></p>
                            <p class="card-text"><strong>Delivery Date:</strong> <?php echo $order["deliveryDate"]; ?></p>
                        </div>
                        <div class="card-footer text-muted text-end">
                            <small>Order ID: <?php echo $order["orderId"]; ?></small>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>
