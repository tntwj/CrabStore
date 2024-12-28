<div class="container my-5">
    <h1 class="text-center mb-4">Buy the <?php echo $templateParams["product-details"]["name"]; ?></h1>
    <p class="text-center mb-4"><span class="fw-bold">Base price: </span><?php echo formatPrice($templateParams["product-details"]["price"]); ?></p>
    <div class="text-center mb-4">
        <img src="<?php echo $templateParams["product-image"]; ?>" alt="Image of <?php echo $templateParams["product-details"]["name"]; ?>" width="320">
    </div>
    <form method="POST" action="process-configuration.php">
    <?php foreach ($templateParams["product-configurables"] as $configurable): ?>
    <fieldset>
        <legend class="visually-hidden"><?php echo $configurable["name"]; ?></legend>
        <div class="d-flex align-items-center mb-4">
            <h2 class="my-0 me-3"><?php echo $configurable["name"]; ?></h2>
            <img src="<?php echo $configurable["icon"]; ?>" alt="Icon of <?php echo strtolower($configurable["name"]); ?>" width="48" />
        </div>
        <?php if ($configurable["name"] == "Color"): ?>
        <div class="d-flex gap-3">
            <?php foreach ($configurable["options"] as $colorOption): ?>
            <label class="color-circle-wrapper" for="color-<?php echo $colorOption["configurableOptionId"]; ?>">
                <input type="radio" id="color-<?php echo $colorOption["configurableOptionId"]; ?>" name="config_<?php echo $configurable["configurableId"]; ?>" value="<?php echo $colorOption["configurableOptionId"]; ?>" class="form-check-input d-none" <?php echo $colorOption["isDefault"] ? "checked='checked' " : ""; ?>required />
                <span class="color-circle" style="background-color: <?php echo getColorCode($colorOption["details"]); ?>;" title="<?php echo $colorOption["details"]; ?>"></span>
                <p class="text-center small"><?php echo $colorOption["details"]; ?></p>
                <p class="text-center small text-success my-0"><?php echo "+" . formatPrice($colorOption["price"]); ?></p>
            </label>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="row row-cols-1 row-cols-md-2 g-3 mb-4">
            <?php foreach ($configurable["options"] as $option): ?>
                <div class="col">
                    <input type="radio" id="<?php echo $option["configurableOptionId"]; ?>" name="config_<?php echo $configurable["configurableId"]; ?>" value="<?php echo $option["configurableOptionId"]; ?>" class="form-check-input d-none" <?php echo $option["isDefault"] ? "checked='checked' " : ""; ?>required />
                    <label for="<?php echo $option["configurableOptionId"]; ?>" class="card h-100 p-3 border shadow-sm option-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-title my-0"><?php echo $option["details"]; ?></p>
                            <p class="card-price my-0 text-success"><?php echo "+" . formatPrice($option["price"]); ?></p>
                        </div>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </fieldset>
        <?php endforeach; ?>
        <input type="hidden" name="productId" value="<?php echo $templateParams["product-details"]["productId"]; ?>" />
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
        </div>
    </form>
</div>
