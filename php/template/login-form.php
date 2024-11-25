<?php
if (session_status() === PHP_SESSION_ACTIVE && ($_SESSION[SessionKey::LOGIN_OUTCOME] ?? null)) {
    if ($_SESSION[SessionKey::LOGIN_OUTCOME] === LoginOutcome::WRONG_PASSWORD) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> Incorrect password. Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
    } else if ($_SESSION[SessionKey::LOGIN_OUTCOME] === LoginOutcome::NO_USER_FOUND) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> No user found with that email address.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
    }
    unset($_SESSION[SessionKey::LOGIN_OUTCOME]);
};
?>
<div class="container d-flex flex-column align-items-center mt-3">
    <h1>Sign in to Crab Store</h1>
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
    <a href="register.php">Don't have an account? Create yours now.</a>
</div>
