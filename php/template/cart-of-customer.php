<h2>Carrello</h2>
<ul>
<?php if(isset($templateParams["products-cart"])): ?>
<?php foreach($templateParams["products-cart"] as $product): ?>
    <li>
        <p><?php echo $product["name"]; ?></p>
    </li>
</ul>
<?php endforeach ?>
<?php endif ?>