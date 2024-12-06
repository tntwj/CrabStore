<?php
    $accountDetails = $templateParams["account-details"][0];
    $totalOrders = $templateParams["total-orders"];
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Account Details</h5>
                    <p><strong>First Name:</strong> <?php echo $accountDetails["firstName"]; ?></p>
                    <p><strong>Last Name:</strong> <?php echo $accountDetails["lastName"]; ?></p>
                    <p><strong>Email:</strong> <?php echo $accountDetails["email"]; ?></p>
                    <p><strong>Joined On:</strong> <?php echo $accountDetails["joinDate"]; ?></p>
                    <button class="btn btn-primary">Edit Profile</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Additional Information</h5>
                    <p><strong>Total Orders Made:</strong> <?php echo $totalOrders; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>