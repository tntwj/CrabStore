<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $templateParams["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="index.php">🦀</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabMac">CrabBooks</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabPhone">CrabPhones</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabPad">CrabPads</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabWatch">CrabWatch</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabPods">CrabPods</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=Accessories">Accessories</a></li>
                </ul>
            </div>
            <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount">
                🛍️
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAccount">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Account Options</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <?php if (!isUserLoggedIn()) { ?>
                <a class="dropdown-item d-flex align-items-center" href="login.php">
                    <img src="./upload/template/user-page-icon.png" width="30" alt="User Page" class="me-2"/>
                    <span>Sign in</span>
                </a>
            <?php } ?>
            <a class="dropdown-item d-flex align-items-center" href="account.php">
                <img src="./upload/template/user-page-icon.png" width="30" alt="User Page" class="me-2"/>
                <span>Account</span>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="notifications.php">
                <img src="./upload/template/notify-base-icon.png" width="30" alt="Notifications" class="me-2"/>
                <span>Notifications</span>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="cart.php">
                <img src="./upload/template/cart-page-icon.png" width="30" alt="Cart" class="me-2"/>
                <span>Cart</span>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="orders.php">
                <img src="./upload/template/user-page-icon.png" width="30" alt="Orders" class="me-2"/>
                <span>Orders</span>
            </a>
            <?php if (isUserLoggedIn()) { ?>
                <a class="dropdown-item d-flex align-items-center" href="<?php echo HANDLERS_DIR . 'logout-handler.php'; ?>">
                    <img src="./upload/template/user-page-icon.png" width="30" alt="Logout" class="me-2"/>
                    <span>Logout</span>
                </a>
            <?php } ?>
        </div>
    </div>

    <?php displayFlashMessage(); ?>
    <main>
        <?php require($templateParams["main-content"]); ?>
    </main>
    <?php if (!empty($templateParams["aside-content"])) {
        echo "<aside>";
        require($templateParams["aside-content"]);
        echo "</aside>";
    };
    ?>

    <footer class="mt-5 pt-4 bg-dark text-light text-center">
        <div class="container-fluid justify-content-center text-secondary">
            <p class="text-center text-break">
                Crabapple offers a free 1 day shipping for all items. Once bought the order can't be cancelled.<br/>
                For any inconvenience or question you can call our 0h call service at the following number +99 000 000 0000.<br/>
                Thank you for your cooperation.
            </p>
            <p class="text-center">
                Unless otherwise indicated, all the names or products in this site are complete productions of Crabapple Inc.<br/> Any
                resemblance to products or names of another hypothetical company is purely coincidental.<br/>Crabapple is in no way
                responsible for any legal repercussions for any of the coincidences written above.
            </p >
            <p class="text-center">Copyright © 2024 Crabapple Inc. All rights reserved. | We offer no refunds. Deal with it | Atlantic Ocean</p>
        </div>
        <nav class="d-flex justify-content-center gap-3">
            <a href="#" class="text-light text-decoration-none">About Us</a>
            <a href="#" class="text-light text-decoration-none">Contact</a>
            <a href="#" class="text-light text-decoration-none">FAQ</a>
            <a href="#" class="text-light text-decoration-none">Support</a>
        </nav>
        <div class="py-3">
            <p class="text-center">CrabStore &copy; 2025</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
