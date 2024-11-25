<?php
if (session_status() == PHP_SESSION_ACTIVE && (($_SESSION[SessionKey::REGISTER_OUTCOME] ?? null) == RegisterOutcome::USER_EXISTS)) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error:</strong> The user is already registered.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';
        unset($_SESSION[SessionKey::REGISTER_OUTCOME]);
    }
?>
<div class="container d-flex flex-column align-items-center mt-3">
    <h1>Create you Crab Store account</h1>
    <form action="<?php echo HANDLERS_DIR;?>register-handler.php" method="post">
        <div class="row my-3">
            <div class="col">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" placeholder="First Name" name="firstname">
            </div>
            <div class="col">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Last Name" name="lastname">
            </div>
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email"class="form-control" placeholder="name@example.com" name="email">
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirm_password">Confirm password:</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="submit" class="btn btn-primary" value="Continue">
        </div>
    </form>
</div>
