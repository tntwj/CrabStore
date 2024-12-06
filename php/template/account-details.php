<?php
    $accountDetails = $templateParams["account-details"][0];
    $totalOrders = $templateParams["total-orders"];
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
            <div class="card shadow border">
                <div class="card-body">
                    <h1 class="card-title text-dark text-center mb-4">Account Details</h1>
                    <p><strong>First Name: </strong><?php echo $accountDetails["firstName"]; ?></p>
                    <p><strong>Last Name: </strong><?php echo $accountDetails["lastName"]; ?></p>
                    <p><strong>Email: </strong><?php echo $accountDetails["email"]; ?></p>
                    <p><strong>Joined On: </strong><?php echo $accountDetails["joinDate"]; ?></p>
                    <p><strong>Total Orders Made: </strong><?php echo $totalOrders; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
