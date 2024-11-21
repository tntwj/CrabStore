<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container-fluid">
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">🦀</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CrabBooks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CrabPhones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CrabPads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CrabWatch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CrabPods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">🔔</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >More</a
                    >
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="login.php">Sign in</a>
                        <a class="dropdown-item" href="#">Account</a>
                        <a class="dropdown-item" href="#">Notifications</a>
                        <a class="dropdown-item" href="cart.php">Cart</a>
                        <a class="dropdown-item" href="#">Orders</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main>
        <h2>Main Content</h2>
    <?php
        require($templateParams["main-content"]);
    ?>
    </main><aside>
        <section>
            <h2>Interesting Stuff</h2>
        </section>
    </aside>
    <footer class="mt-5 p-4 bg-dark text-white text-center">
        <p>CrabStore Copyright 2025</p>
</footer>
</body>
</html>