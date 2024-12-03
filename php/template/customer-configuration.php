<h3>Buy <?php echo $templateParams['single-product-details']['name']?></h3>
<img src="./upload/categories/<?php echo $templateParams['media']?>" alt="<?php echo $templateParams['single-product-details']['name']?>"/>

<h4>Which is best for you?</h4>
<ul class="list-group list-group-flush">
<?php 
$data = json_decode($templateParams['single-product-details']['specSheet'], true);
foreach ($data as $key=>$info): 
?>
<li class="list-group-item">
    <?php 
    if (is_array($info)) {
        echo $key.": ";
        foreach ($info as $value) {
            echo '| '.$value.' ';
        }                                
    }
    ?>
</li>
<?php endforeach ?> 
</ul>

<input type="submit">Add to cart</input>