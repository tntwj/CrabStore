<h1 class="text-center my-4 h2">Your Orders</h1>
<section class="container">
    <div class="row g-4">
        <?php foreach($templateParams["orders"] as $order): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="order.php?id=<?php echo $order["orderId"]; ?>" class="text-decoration-none d-block">
                    <div class="card h-100 order-card">
                        <div class="card-body">
                            <h2 class="card-title">Order #<?php echo $order["orderId"]; ?></h2>
                            <p class="card-text">
                                <span class="fw-bold">Status:</span>
                                <?php 
                                    $statusClass = "";
                                    switch ($order["orderStatus"]) {
                                        case "Ordered":
                                            $statusClass = "badge bg-primary";
                                            break;
                                        case "Delivered":
                                            $statusClass = "badge bg-success";
                                            break;
                                        case "In Transit":
                                            $statusClass = "badge bg-warning";
                                            break;
                                    }
                                ?>
                                <span class="<?php echo $statusClass; ?>"><?php echo $order["orderStatus"]; ?></span>
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Order Date:</span> 
                                <?php
                                    $orderDate = new DateTime($order["orderDate"]);
                                    echo $orderDate->format('F j, Y g:i A');
                                ?>
                            </p>
                            <p class="card-text">
                                <span class="fw-bold">Delivery Date:</span> 
                                <?php
                                    $deliveryDate = $order["deliveryDate"];
                                    if ($deliveryDate) {
                                        $deliveryDate = new DateTime();
                                        echo $deliveryDate->format('F j, Y g:i A');
                                    } else {
                                        echo "Yet to arrive";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</section>
