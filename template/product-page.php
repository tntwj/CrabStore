<section class="container mt-5">
    <h2 class="text-start mb-4"><?php echo $templateParams['single-product-details']['name']?></h2>
    <div class="row">
        <div class="col-sm-12 col-md-4 mb-3">
            <div class="card">
                <img src="./upload/products/<?php echo $templateParams['media']?>" class="card-img-top w-250 h-auto" alt="<?php echo $templateParams['product-category']?>">
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <p class="card-text col-4  mb-0">Price: <?php echo $templateParams['single-product-details']['price']?>€</p>
                        <p class="card-text col-4  mb-0"></p>
                        <a href="configuration.php?product=<?php echo $templateParams['single-product-details']['productId']; ?>.&media=<?php echo $templateParams['media']; ?>" class="col-4 btn btn-primary text-center">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8 mb-3">
            <div class="card h-100 d-flex flex-column">
                <div class="card-header">
                    Description
                </div>
                <div class="card-body overflow-auto" style="max-height: 440px;">
                    <p class="card-text">
                        <?php echo $templateParams['single-product-details']['description']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body overflow-auto" style="max-height: 3git00px;">
                    <h5 class="card-header">
                        Specification Table
                    </h5>
                    <ul class="list-group list-group-flush">
                        <?php 
                        $data = json_decode($templateParams['single-product-details']['specSheet'], true);
                        foreach ($data as $key=>$info): 
                        ?>
                        <li class="list-group-item">
                            <?php 
                            echo $key.": ";
                            if (is_array($info)) {
                                foreach ($info as $value) {
                                    echo '| '.$value.' ';
                                }                                
                            } else {
                                echo ($info);
                            }
                            ?>
                        </li>
                        <?php endforeach ?> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>