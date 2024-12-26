<?php if (!empty($templateParams["first-name"])): ?>
    <h1 class="display-1 text-center m-3">Welcome back, <?php echo $templateParams["first-name"]; ?>!</h1>
<?php else: ?>
    <h1 class="display-1 text-center m-3">Welcome to CrabStore!</h1>
<?php endif; ?>
<section class="container">
    <div class="container bg-secondary-subtle d-flex justify-content-center mb-3 p-2 rounded-pill">
        <h2 class="text-center py-3">Check out our newest products!<br />Get them now!</h2>
    </div>
    <div id="upcomingProductsCarousel" class="carousel carousel-dark slide mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#upcomingProductsCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#upcomingProductsCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#upcomingProductsCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <?php $setActive = true ?>
            <?php foreach($templateParams["upcoming-products"] as $product): ?>
                <div class="carousel-item<?php echo $setActive ? ' active' : ''; ?>" data-bs-interval="5000">
                    <h3 class="display-6 text-center mb-2"><?php echo $product["name"]; ?></h2>
                    <p class="lead text-center mb-3"><?php echo $product["shortDescription"]; ?></p>
                    <p class="h4 text-center text-primary"><?php echo "Starting at: $" . $product["price"]; ?></p>
                    <a href="view-product.php?product=<?php echo $product["productId"]?>">
                        <img src="upload/products/<?php echo $product["imageUrl"]; ?>" class="d-block w-100" alt="<?php echo $product["name"]?>">
                    </a>
                </div>
                <?php $setActive = false; ?>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#upcomingProductsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#upcomingProductsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="container mt-5">
    <h2 class="text-center mb-4">What Our Customers Say About Our Products</h2>
    <div class="row">
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>"The CrabPhone 14 is amazing! It's fast, sleek, and has an incredible camera. I can't recommend it enough!"</p>
                        <footer class="blockquote-footer">Jane Doe, <cite title="Jane Doe">Verified Customer</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>"I love my CrabPad! It's the perfect size for work and play. Plus, it's lightweight and easy to carry around."</p>
                        <footer class="blockquote-footer">John Smith, <cite title="John Smith">Verified Customer</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>"CrabWatch Series 7 is a game-changer. It tracks my workouts and keeps me connected, all in one sleek design!"</p>
                        <footer class="blockquote-footer">Sarah Lee, <cite title="Sarah Lee">Verified Customer</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
