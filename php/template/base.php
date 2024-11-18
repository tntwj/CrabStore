<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $templateParams["title"]; ?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
    <header>
        <h1>Big header</h1>
    </header>
    <main>
        <h2>Main Content</h2>
    <?php
        // require($templateParams["nome"]); the main content
    ?>
    </main><aside>
        <section>
            <h2>News</h2>
        </section>
    </aside>
    <footer>
        <p>CrabStore Copyright - A.A. 2024/2025</p>
    </footer>
</body>
</html>