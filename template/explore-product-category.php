<section class="container mt-4">
    <h1 class="text-center mb-4 h2"><?php echo $templateParams["category-details"]["description"]; ?></h1>
    <?php
        $products = $templateParams["products"];
        $columnsInRow = 3;
        $productCount = count($products);
    ?>
    <div class="container">
        <pre><?php print_r($products); ?></pre>
        <?php if ($productCount > 0): ?>
            <div class="row">
            <?php foreach ($products as $index => $product): ?>
                <?php if ($index > 0 && $index % $columnsInRow === 0): ?>
                    </div>
                    <div class="row">
                <?php endif; ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo $product["image"]; ?>" class="card-img-top" alt="<?php echo $product["name"]?>">
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title"><?php echo $product["name"]; ?></h2>
                            <p class="card-text"><?php echo $product["shortDescription"]; ?></p>
                            <a href="product.php?productId=<?php echo $product['productId']; ?>" class="btn btn-primary mt-auto">View Product</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-center">No products found in this category.</p>
        <?php endif; ?>
    </div>
</section>
