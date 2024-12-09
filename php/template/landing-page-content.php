<?php if (!empty($templateParams["first-name"])): ?>
    <h1 class="display-2 text-center mt-3">Welcome back, <?php echo $templateParams["first-name"]; ?>!</h1>
<?php else: ?>
    <h1 class="display-2 text-center mt-3">Welcome to CrabStore!</h1>
<?php endif; ?>

<div id="carouselExampleDark" class="carousel carousel-dark slide mx-auto" style="width: 480px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            <img src="upload/products/crabmacdesktop-main.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            <img src="upload/products/crabpad-main.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            <img src="upload/products/crabphone-main.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="container mt-5">
    <h2 class="text-center mb-4">Customer Reviews</h2>
    <div class="row">
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>"The CrabPhone 14 is amazing! It's fast, sleek, and has an incredible camera. I can't recommend it enough!"</p>
                        <footer class="blockquote-footer">Jane Doe, <cite title="Source">Verified Customer</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>"I love my CrabPad! It's the perfect size for work and play. Plus, it's lightweight and easy to carry around."</p>
                        <footer class="blockquote-footer">John Smith, <cite title="Source">Verified Customer</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>"CrabWatch Series 7 is a game-changer. It tracks my workouts and keeps me connected, all in one sleek design!"</p>
                        <footer class="blockquote-footer">Sarah Lee, <cite title="Source">Verified Customer</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
