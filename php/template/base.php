<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">🦀</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabMac">CrabBooks</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabPhone">CrabPhones</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabPad">CrabPads</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabWatch">CrabWatch</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=CrabPods">CrabPods</a></li>
                    <li class="nav-item"><a class="nav-link" href="view-list-products.php?page=Accessories">Accessories</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu">
                            <?php if (!isUserLoggedIn()) {
                                echo "<a class='dropdown-item' href='login.php'>Sign in</a>";
                                };
                            ?>
                            <a class="dropdown-item" href="account.php">
                                <img src="./upload/template/user-page-icon.png" alt="User Page" />Account
                            </a>
                            <a class="dropdown-item" href="notifications.php">
                                <img src="./upload/template/notify-base-icon.png" alt="Notifications" />Notifications
                            </a>

                            <a class="dropdown-item" href="cart.php">
                                <img src="./upload/template/cart-page-icon.png" alt="Cart" />Cart
                            </a>
                            <a class="dropdown-item" href="orders.php">Orders</a>
                            <?php if (isUserLoggedIn()) {
                                echo "<a class='dropdown-item' href=" . HANDLERS_DIR . "logout-handler.php>Logout</a>";
                                };
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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

    <footer class="mt-5 py-4 bg-dark text-white text-center">
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
        <nav>
            <a href="#" class="text-white me-3">About Us</a>
            <a href="#" class="text-white me-3">Contact</a>
            <a href="#" class="text-white me-3">FAQ</a>
            <a href="#" class="text-white">Support</a>
        </nav>
        <div class="py-3">
            <p class="text-center">CrabStore &copy; 2025</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
