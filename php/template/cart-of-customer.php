<h2>Carrello</h2>
<ul>
<?php if(isset($templateParams["products-cart"])): ?>
<?php foreach($templateParams["products-cart"] as $product): ?>
    <li>
        <img src="<?php echo UPLOAD_DIR.$product["image"][0]; ?>" alt="<?php $product["name"]; ?>"/>
        <h3><?php echo $product["name"]; ?></h3>
        <input type="number" id="quantity" name="quantity" min="1" max="6" step="1" value="<?php echo $product["amount"]; ?>">
        <p><?php echo "$".$product["finalPrice"] * 2; ?></p>
    </li>
</ul>
<?php endforeach ?>
<?php endif ?>