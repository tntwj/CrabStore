<section class="container mt-5">
    <h2 class="text-center mb-4">Our <?php echo $templateParams["product-category"] ?> </h2>
    <?php
        $products = $templateParams["products-details"];
        $columnsInRow = 3;
        $productCount = count($products);

        for ($i = 0; $i < $productCount; $i++) { 
            if ($i % $columnsInRow == 0) {
                // Open a new row at the start of each row
                echo '<div class="row">';
            }
            
            $media = $dbh->getProductImages($products[$i]["productId"]);
            echo '<div class="col-sm-12 col-md-4 mb-3">';
            echo '<div class="card">';
            echo '<img src="upload/'.$media[0]["imageUrl"].'" class="card-img-top w-50 h-auto" alt="'.$templateParams["product-category"].'">';
            echo '<div class="card-body">
                        <h5 class="card-title">'.$products[$i]['name'].'</h5>
                        <p class="card-text">'.$products[$i]['shortDescription'].'</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div></div></div>';
            
            // Close the row after every set of 3 columns or at the end of the products list
            if (($i % $columnsInRow == $columnsInRow - 1) || ($i == $productCount - 1)) {
                echo '</div>';
            }
        }
    ?>
</section>