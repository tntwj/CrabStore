<?php
$product = $templateParams["product-details"];
?>
<section class="container my-5">
    <div class="d-flex flex-row align-items-center mb-3">
        <h1 class="text-start"><?php echo $product["name"]; ?></h1>
        <?php if ($product["productStatus"] === "Upcoming"): ?>
            <span class="badge bg-success ms-2">New</span>
        <?php endif; ?>
        <?php if (!empty($product["discount"])): ?>
            <span class="badge bg-danger ms-2">Save <?php echo formatPrice($product["discount"]["amount"]); ?></span>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow">
                <div id="productImageCarousel" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#productImageCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#productImageCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#productImageCarousel" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($product["images"] as $index => $image): ?>
                            <div class="carousel-item <?php echo $index === 0 ? "active" : ""; ?>">
                                <img src="<?php echo $image; ?>" class="card-img-top" alt="Image of <?php echo $product["name"]; ?>" />
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productImageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productImageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0">Starting at: <?php echo formatPrice($product["price"]); ?></p>
                        <a href="configuration.php?id=<?php echo $product["productId"]; ?>" class="col-4 btn btn-primary text-center">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 mb-3">
            <div class="card h-100 d-flex flex-column shadow">
                <div class="card-header">Description</div>
                <div class="card-body">
                    <p class="card-text"><?php echo $product["description"]; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card shadow">
                <div class="card-body overflow-auto">
                    <h2 class="card-header">Specification Table</h2>
                    <ul class="list-group list-group-flush">
                        <?php
                        $data = json_decode($product["specSheet"], true);
                        foreach ($data as $key => $info):
                        ?>
                            <li class="list-group-item">
                                <?php
                                echo $key . ": ";
                                if (is_array($info)) {
                                    foreach ($info as $value) {
                                        echo "| " . $value . " ";
                                    }
                                    echo "|";
                                } else {
                                    echo ($info);
                                }
                                ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>