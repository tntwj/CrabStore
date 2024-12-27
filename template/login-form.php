<div class="container d-flex flex-column align-items-center mt-5">
    <h1>Sign in to CrabStore</h1>
    <form action="login-handler.php" method="post">
        <div class="my-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
    </form>
    <a href="register.php">Don't have an account? Create one now.</a>
</div>
