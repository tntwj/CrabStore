<?php
    $products = $templateParams["products"];
    $columnsInRow = 3;
    $productCount = count($products);
?>
<?php if ($productCount > 0): ?>
    <header class="text-center my-4">
        <h1 class="h2"><?php echo $templateParams["category-details"]["description"]; ?></h1>
    </header>
    <section class="container my-4">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $index => $product): ?>
                    <?php if ($index > 0 && $index % $columnsInRow === 0): ?>
                        </div>
                        <div class="row">
                    <?php endif; ?>
                    <div class="col-md mb-4">
                        <div class="card h-100">
                            <img src="<?php echo $product["image"]; ?>" class="card-img-top" alt="Image of <?php echo $product["name"]?>">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title"><?php echo $product["name"]; ?></h2>
                                <p class="card-text"><?php echo $product["shortDescription"]; ?></p>
                                <!-- mt-auto to pushes the button to the bottom -->
                                <a href="product.php?productId=<?php echo $product['productId']; ?>" class="btn btn-primary mt-auto">View Product</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Fill the remaining columns in the last row if necessary -->
                <?php 
                    $remainingColumns = $columnsInRow - ($productCount % $columnsInRow);
                    if ($remainingColumns < $columnsInRow && $productCount % $columnsInRow !== 0): ?>
                    <?php for ($i = 0; $i < $remainingColumns; $i++): ?>
                        <div class="col-md mb-4"></div>
                    <?php endfor; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <h1 class="text-center mt-3">No products found</h1>
<?php endif; ?>