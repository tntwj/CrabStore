
<div class="container py-5">
    <h3 class="text-center mb-4">Buy <?php echo $templateParams['single-product-details']['name']; ?></h3>
    <p class="text-center mb-4"><?php echo " (From $" . $templateParams['single-product-details']["price"] . ")"; ?></p>
    <div class="text-center mb-4">
        <img src="<?php echo UPLOAD_DIR?>products/<?php echo $templateParams['media']; ?>" 
             alt="<?php echo $templateParams['single-product-details']['name']; ?>" 
             class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <form method="POST" action="process-configuration.php">
        <?php
        foreach ($templateParams["product-configurables"] as &$configurable): 
            if (count($configurable["options"]) > 1): 
                ?>
                <div class="mb-4">
                    <!-- Key Header -->
                    <h5 class="mb-3"><?php echo $configurable["name"]; ?> <span class="text-muted"></span></h5>

                    <!-- Color Options -->
                    <?php if($configurable["name"] == "Color") { ?>
                    <div class="d-flex gap-3">
                        <?php foreach ($configurable["options"] as $colorOption): 
                            $colorCode = getColorCode($colorOption["details"]); 
                        ?>
                            <label class="color-circle-wrapper">
                                <input type="radio" name="<?php echo $configurable["name"]; ?>" value="<?php echo $colorOption["configurableOptionId"]; ?>" class="form-check-input d-none" required/>
                                <span class="color-circle" 
                                    style="background-color: <?php echo $colorCode; ?>;"
                                    title="<?php echo $colorOption["details"]; ?>">
                                </span>
                                <p class="text-center small mt-2"><?php echo $colorOption["details"]; ?></p>
                                <p class="text-center small mt-1 text-success"><?php echo "+" . $colorOption["price"]; ?></p>
                            </label>
                        <?php endforeach; ?>
                    </div>

                    <!-- Model Options -->
                    <?php } else { ?>
                    <div class="row row-cols-1 row-cols-md-2 g-3 mb-4">
                        <?php foreach ($configurable["options"] as $modelOption): ?>
                            <div class="col">
                                <input type="radio" id="<?php echo $modelOption["configurableOptionId"]; ?>" name="<?php echo $configurable["name"]; ?>" value="<?php echo $modelOption["configurableOptionId"]; ?>" class="form-check-input d-none" required/>
                                <label for="<?php echo $modelOption["configurableOptionId"]; ?>" class="card h-100 p-3 border shadow-sm option-card">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-1"><?php echo $modelOption["details"]; ?></h5>
                                        <p class="card-price mb-1 text-success"><?php echo "+" . $modelOption["price"]; ?></p>
                                    </div>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php } ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <input type = "hidden" name="productId" value="<?php echo $templateParams['single-product-details']['productId']; ?>" />
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
        </div>
    </form>
</div>

