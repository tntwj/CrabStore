
<div class="container py-5">
    <h3 class="text-center mb-4">Buy <?php echo $templateParams['single-product-details']['name']; ?></h3>

    <div class="text-center mb-4">
        <img src="./upload/categories/<?php echo $templateParams['media']; ?>" 
             alt="<?php echo $templateParams['single-product-details']['name']; ?>" 
             class="img-fluid rounded" style="max-width: 300px;">
    </div>

    <form method="POST" action="process-configuration.php">
        <?php 
        $data = json_decode($templateParams['single-product-details']['specSheet'], true);
        foreach ($data as $key => $info): ?>
            <?php if (is_array($info)): // Only process if $info is an array ?>
                <?php 
                $configOptions = $dbh->getProductConfigurableOptionsByConfigId($templateParams['single-product-details']['productId'], $key);
                var_dump($configOptions);
                ?>
                <div class="mb-4">
                    <!-- Key Header -->
                    <h5 class="mb-3"><?php echo $key; ?> <span class="text-muted"></span></h5>

                    <?php if($key == "Color Options") { ?>
                    <!-- Color Options -->
                    <div class="d-flex gap-3">
                        <?php foreach ($info as $colorOption): 
                            $colorCode = getColorCode($colorOption); 
                            $optionId = getConfigOptionId($configOptions, $colorOption);
                        ?>
                            <label class="color-circle-wrapper">
                                <input type="radio" name="<?php echo $key; ?>" value="<?php echo $optionId; ?>" class="form-check-input d-none" />
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
                            <?php $optionId = getConfigOptionId($configOptions, $modelOption); ?>
                            <div class="col">
                                <input type="radio" id="<?php echo $key; ?>-<?php echo $index; ?>" name="<?php echo $key; ?>" value="<?php echo $optionId; ?>" class="form-check-input d-none" />
                                <label for="<?php echo $key; ?>-<?php echo $index; ?>" class="card h-100 p-3 border shadow-sm option-card">
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

/* Stili di base per l'opzione */
label.option-card {
    cursor: pointer;
    text-align: center;
    border: 2px solid transparent;
    transition: all 0.3s;
}

/* Quando l'input radio è selezionato, applica lo stile al genitore label */
input[type="radio"]:checked + label.option-card {
    background-color: rgba(0, 123, 255, 0.1);
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