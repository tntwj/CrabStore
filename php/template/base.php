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
                    <li class="nav-item"><a class="nav-link" href="explore-products.php?page=CrabMac">CrabBooks</a></li>
                    <li class="nav-item"><a class="nav-link" href="explore-products.php?page=CrabPhone">CrabPhones</a></li>
                    <li class="nav-item"><a class="nav-link" href="explore-products.php?page=CrabPad">CrabPads</a></li>
                    <li class="nav-item"><a class="nav-link" href="explore-products.php?page=CrabWatch">CrabWatch</a></li>
                    <li class="nav-item"><a class="nav-link" href="explore-products.php?page=CrabPods">CrabPods</a></li>
                    <li class="nav-item"><a class="nav-link" href="explore-products.php?page=Accessories">Accessories</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu">
                            <?php if (!isUserLoggedIn()) {
                                echo "<a class='dropdown-item' href='login.php'>Sign in</a>";
                                };
                            ?>
                            <a class="dropdown-item" href="account.php">Account</a>
                            <a class="dropdown-item" href="notifications.php">Notifications</a>
                            <a class="dropdown-item" href="cart.php">Cart</a>
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
    <footer class="mt-5 p-4 bg-dark text-white text-center">
        <p>CrabStore &copy; 2025</p>
        <nav>
            <a href="#" class="text-white me-3">About Us</a>
            <a href="#" class="text-white me-3">Contact</a>
            <a href="#" class="text-white me-3">FAQ</a>
            <a href="#" class="text-white">Support</a>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
