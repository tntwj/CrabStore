<div class="container d-flex flex-column align-items-center mt-3">
    <h1>Create you CrabStore account</h1>
    <form action="handlers/register-handler.php" method="post">
        <div class="row my-3">
            <div class="col">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" placeholder="First Name" name="first-name" required>
            </div>
            <div class="col">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Last Name" name="last-name" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email"class="form-control" placeholder="name@example.com" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirm-password">Confirm password:</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password" required>
        </div>
        <div class="mb-3 error-div">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="submit" class="btn btn-primary" value="Continue">
        </div>
    </form>
</div>
