<?php
session_start();
//unset($_SESSION['article']);
//unset($_SESSION['article'][3]);
require "partials/head.php";
require "partials/nav.php";
$productsJson = file_get_contents('../assets/products.json');
$products = json_decode($productsJson, true);
$total = 0;

//To delete items from the cart
if (isset($_SESSION['article'])){
    foreach ($_SESSION['article'] as $id => $quantity) {
        if (isset($_GET["delete{$id}"])){
            unset($_SESSION['article'][$id]);
        }
    }
}

// echo '<pre>' ;
// print_r($_SESSION);
// echo '</pre>';

//Display items from the cart
?>
<div class="wrapArticles">
    <div class="wrapCartArticle wrapCartArticle__title">
            <div class="wrapCartArticle__wrapdetails">Article</div>
            <p class="wrapCartArticle__quantity">Quantity</p>
            <p class="wrapCartArticle__subtotal">Total</p>
    </div>
<?php 
if (($products !== null) AND isset($_SESSION['article']) AND !empty($_SESSION['article'])) {
    foreach ($_SESSION['article'] as $id => $quantity) { ?>
        <div class="wrapCartArticle wrapCartArticle__item">
            <form action="" method="get">
                <button class="wrapCartArticle__delete" type="submit" name="delete<?= $id ?>" value="Delete">
                    <img src="../assets/img/trash-can-solid.svg" width="20" alt="trash">
                </button>
            </form>
            <img src="../<?= $products[$id-1]["image_url"] ?>" alt="Picture of a shoe" width="50" height="50">
            <div class="wrapCartArticle__wrapdetails">
                <p class="wrapCartArticle__wrapdetails__product"><?= $products[$id-1]["product"] ?></p>
                <p class="wrapCartArticle__wrapdetails__price"><?= $products[$id-1]["price"] ?> €</p>
            </div>
            <p class="wrapCartArticle__quantity"><?= $quantity ?></p>
            <p class="wrapCartArticle__subtotal"><?= $quantity * $products[$id-1]["price"]?> €</p>
        </div>
        <?php $total += $quantity * $products[$id-1]["price"];
    }?>
    <div class="wrapCartArticle">
        <p class="wrapCartArticle__totalPrice"><?= $total ?> €</p>
    </div>
    </div>
    <?php
    
} else if (!isset($_SESSION['article']) OR empty($_SESSION['article'])) { ?>
    <p class="shoppingCartEmpty">Your cart is empty, select an item please</p>
<?php 
} else {
    echo 'Error parsing JSON data.';
}?>


    <div class="checkout">
        <a class="checkout__btn btn btn--store" href="checkout.php">Checkout</a>
    </div>

</div>

<?php 
require "partials/footer.php";
?>

