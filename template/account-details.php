<?php
    $accountDetails = $templateParams["account-details"];
    $totalOrders = $templateParams["total-orders"];
?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="card shadow border">
                <div class="card-body">
                    <h1 class="card-title display-4 mb-4 text-center">Account Details</h1>
                    <p><span class="fw-bold">First Name: </span><?php echo $accountDetails["firstName"]; ?></p>
                    <p><span class="fw-bold">Last Name: </span><?php echo $accountDetails["lastName"]; ?></p>
                    <p><span class="fw-bold">Email: </span><?php echo $accountDetails["email"]; ?></p>
                    <p><span class="fw-bold">Joined On: </span><?php echo $accountDetails["joinDate"]; ?></p>
                    <p><span class="fw-bold">Total Orders Made: </span><?php echo $totalOrders; ?></p>
                    <div class="d-flex justify-content-center gap-2">
                        <button class="btn btn-primary change-details-button">Change Details</button>
                        <button class="btn btn-primary change-password-button">Change Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
