<?php
session_start();
//unset($_SESSION['article']);
//unset($_SESSION['article'][3]);
$productsJson = file_get_contents('../assets/products.json');
$products = json_decode($productsJson, true);
$total = 0;

//To delete items from the cart
foreach ($_SESSION['article'] as $id => $quantity) {
    if (isset($_GET["delete{$id}"])){
        unset($_SESSION['article'][$id]);
    }
}

// echo '<pre>' ;
// print_r($products);
// echo '</pre>';

// echo '<pre>' ;
// print_r($_SESSION);
// echo '</pre>';

if (($products !== null) AND isset($_SESSION['article']) AND !empty($_SESSION['article'])) {
    foreach ($_SESSION['article'] as $id => $quantity) { ?>
        <div class="wrapCartArticle">
            <form action="" method="get">
                <input type="submit" name="delete<?= $id ?>" value="Delete">
            </form>
            <img src="../<?= $products[$id-1]["image_url"] ?>" alt="Picture of a shoe" width="80" height="80">
            <div class="wrapCartArticle__wrapdetails">
                <p class="wrapCartArticle__wrapdetails__product"><?= $products[$id-1]["product"] ?></p>
                <p class="wrapCartArticle__wrapdetails__price"><?= $products[$id-1]["price"] ?></p>
            </div>
            <p class="wrapCartArticle__quantity"><?= $quantity ?></p>
            <p class="wrapCartArticle__subtotal"><?= $quantity * $products[$id-1]["price"]?></p>
        </div>
        <?php $total += $quantity * $products[$id-1]["price"];
    }?>
    
    <p class="totalPrice"><?= $total ?></p>
    <?php
    
} else if (!isset($_SESSION['article']) OR empty($_SESSION['article'])) { ?>
    <p class="shoppingCartEmpty">Your cart is empty, select an item please</p>
<?php 
} else {
    echo 'Error parsing JSON data.';
}?>

