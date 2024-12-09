<div class="container d-flex flex-column align-items-center mt-3">
    <h1>Sign in to CrabStore</h1>
    <form action="<?php echo HANDLERS_DIR;?>login-handler.php" method="post">
        <div class="my-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
        <div class="form-check d-flex justify-content-center mb-3">
            <label for="form-check-label">
                <input type="checkbox" class="form-check-input" name="remember">Remember me
            </label>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>
    <a href="register.php">Don't have an account? Create one now.</a>
</div>
