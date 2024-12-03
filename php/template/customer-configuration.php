<?php
$colorMap = [
    "Red" => "#FF0000",
    "Blue" => "#0000FF",
    "Green" => "#00FF00",
    "Deep Blue" => "#001F54", // Custom color for "Deep Blue"
    "Yellow" => "#FFFF00",
    "Gold" => "#FFFF11",
    "Black" => "#000000",
    "White" => "#FFFFFF",
];
?>

<div class="container py-5">
    <h3 class="text-center mb-4">Buy <?php echo $templateParams['single-product-details']['name']; ?></h3>

    <div class="text-center mb-4">
        <img src="./upload/categories/<?php echo $templateParams['media']; ?>" 
             alt="<?php echo $templateParams['single-product-details']['name']; ?>" 
             class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <form method="POST" action="add_to_cart.php">
        <?php 
        $data = json_decode($templateParams['single-product-details']['specSheet'], true);
        foreach ($data as $key => $info): ?>
            <?php if (is_array($info)): // Only process if $info is an array ?>
                <div class="mb-4">
                    <!-- Key Header -->
                    <h5 class="mb-3"><?php echo $key; ?> <span class="text-muted">(Select one)</span></h5>

                    <?php if($key == "Color Options") { ?>
                    <!-- Color Options -->
                    <div class="d-flex gap-3">
                        <?php foreach ($info as $colorOption): 
                            // Map color name to color code using $colorMap, default to gray if not found
                            $colorCode = $colorMap[$colorOption] ?? "#CCCCCC"; 
                        ?>
                            <label class="color-circle-wrapper">
                                <input type="radio" name="color" value="<?php echo $colorOption; ?>" class="form-check-input d-none" />
                                <span class="color-circle" 
                                    style="background-color: <?php echo $colorCode; ?>;"
                                    title="<?php echo $colorOption; ?>">
                                </span>
                                <p class="text-center small mt-2"><?php echo $colorOption; ?></p>
                            </label>
                        <?php endforeach; ?>
                    </div>

                    <?php } else { ?>
                    <!-- Model Options -->
                    <div class="row row-cols-1 row-cols-md-2 g-3 mb-4">
                        <?php foreach ($info as $index => $modelOption): ?>
                            <div class="col">
                                <label class="option-card card h-100 p-3 border shadow-sm">
                                    <input type="radio" name="<?php echo $key; ?>" value="<?php echo $modelOption; ?>" class="form-check-input " />
                                    <h5 class="card-title mb-1"><?php echo $modelOption; ?></h5>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php } ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
        </div>
    </form>
</div>

<style>

/* For card options */
/* Hide the default radio button */
input[type="radio"].d-none {
    display: none;
}

/* Add custom styles for the label */
.option-card {
    cursor: pointer;
    text-align: center;
    border: 2px solid transparent;
    transition: all 0.3s;
}

/* For color circles */
.color-circle-wrapper {
    text-align: center;
    cursor: pointer;
}

.color-circle {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid transparent;
    transition: all 0.3s;
}

input[type="radio"]:checked + .color-circle {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.7);
}

.color-circle-wrapper:hover .color-circle {
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
}

</style>