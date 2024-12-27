<div class="container d-flex flex-column align-items-center mt-5">
    <h1 class="text-center">Create you CrabStore account</h1>
    <form action="register-handler.php" method="post">
        <div class="row my-3">
            <div class="col">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstName" required>
            </div>
            <div class="col">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastName" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="name@example.com" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword">Confirm password:</label>
            <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <div class="mb-3 error-div">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="submit" class="btn btn-primary" value="Continue">
        </div>
    </form>
</div>
