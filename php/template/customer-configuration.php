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
                    
                    <!-- Option Cards -->
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <?php foreach ($info as $index => $option): ?>
                            <div class="col">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <p class="card-text mb-0"><?php echo $option; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
        </div>
    </form>
</div>

