<?php $order = $templateParams["order"]; ?>
<h2>Order n.<?php echo $orderId; ?></h2>
<?php foreach($templateParams["order-products"] as $product): ?>
    <img src="<?php echo UPLOAD_DIR.$product["images"][0]["imageUrl"]; ?>" 
            alt="<?php echo $product["information"][0]["name"]; // Optimize in db?>"> 
    <h4><?php echo $product["information"][0]["name"]; ?> </h4>
    <p><?php echo $product["finalPrice"]; ?> </p>
    <p><?php echo $product["amount"]; ?> </p>
<?php endforeach ?>
<?php $order = $templateParams["order"]; ?>
<p><?php echo $order["orderStatus"]; ?>
<p><?php echo $order["orderDate"]; ?>
<p><?php echo $order["deliveryDate"]; ?>
<p><?php echo $order["email"]; ?>