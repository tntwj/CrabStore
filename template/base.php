<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="index.php"><img src="./upload/logo/crabapple.png" width="32" alt="brand logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link p-2 mt-1" href="product-category.php?category=CrabMac">CrabMacs</a></li>
                    <li class="nav-item"><a class="nav-link p-2 mt-1" href="product-category.php?category=CrabPhone">CrabPhones</a></li>
                    <li class="nav-item"><a class="nav-link p-2 mt-1" href="product-category.php?category=CrabPad">CrabPads</a></li>
                    <li class="nav-item"><a class="nav-link p-2 mt-1" href="product-category.php?category=CrabWatch">CrabWatch</a></li>
                    <li class="nav-item"><a class="nav-link p-2 mt-1" href="product-category.php?category=CrabPods">CrabPods</a></li>
                    <li class="nav-item"><a class="nav-link p-2 my-1" href="product-category.php?category=Accessories">Accessories</a></li>
                </ul>
            </div>
            <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount">🛍️</button>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAccount">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav class="nav flex-column">
                <?php if (!isUserLoggedIn()): ?>
                <a class="nav-link d-flex align-items-center" href="login.php">
                    <img src="./upload/ui-icons/sign-in.png" width="48" alt="sign-in icon" class="me-2"/>
                    <span class="text-dark">Sign in</span>
                </a>
                <?php endif; ?>
                <a class="nav-link d-flex align-items-center" href="account.php">
                    <img src="./upload/ui-icons/user.png" width="48" alt="account icon" class="me-2"/>
                    <span class="text-dark">Account</span>
                </a>
                <a class="nav-link d-flex align-items-center" href="notifications.php">
                    <img src="./upload/ui-icons/notifications.png" width="48" alt="notification icon" class="me-2"/>
                    <span class="text-dark">Notifications</span>
                </a>
                <a class="nav-link d-flex align-items-center" href="cart.php">
                    <img src="./upload/ui-icons/cart.png" width="48" alt="cart icon" class="me-2"/>
                    <span class="text-dark">Cart</span>
                </a>
                <a class="nav-link d-flex align-items-center" href="orders.php">
                    <img src="./upload/ui-icons/orders.png" width="48" alt="orders icon" class="me-2"/>
                    <span class="text-dark">Orders</span>
                </a>
                <?php if (isUserLoggedIn()): ?>
                <a class="nav-link d-flex align-items-center" href="logout-handler.php">
                    <img src="./upload/ui-icons/logout.png" width="48" alt="logout icon" class="me-2"/>
                    <span class="text-dark">Logout</span>
                </a>
                <?php endif; ?>
            </nav>
        </div>
    </div>
    <?php displayFlashMessage(); ?>
    <main class="flex-fill overflow-hidden">
        <?php require($templateParams["main-content"]); ?>
    </main>
    <?php if (!empty($templateParams["aside-content"])): ?>
    <aside>
    <?php require($templateParams["aside-content"]); ?>
    </aside>
    <?php endif; ?>
    <footer class="mt-3 py-4 bg-dark text-center">
    <div class="container-fluid justify-content-center text-secondary">
        <p>This website does not use cookies or track user data.</p>
        <div class="mb-3">
            <a href="about.php" class="text-light text-decoration-none">About Us</a>
        </div>
        <p>Copyright © <?php echo date("Y"); ?> Crabapple Inc. All rights reserved.</p>
    </div>
    </footer>
    <?php if (!empty($templateParams["scripts"])): ?>
    <?php foreach ($templateParams["scripts"] as $script): ?>
    <script src="<?php echo $script; ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
