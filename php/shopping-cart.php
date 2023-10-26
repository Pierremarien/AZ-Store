<?php
session_start();
//unset($_SESSION['article']);
unset($_SESSION['article'][3]);
$productsJson = file_get_contents('../assets/products.json');
$products = json_decode($productsJson, true);
$total = 0;

echo '<pre>' ;
print_r($products);
echo '</pre>';

echo '<pre>' ;
print_r($_SESSION);
echo '</pre>';

if (($products !== null) AND (isset($_SESSION['article'])) AND (!empty($_SESSION['article']))) {
    foreach ($_SESSION['article'] as $id => $quantity) { ?>
        <div class="wrapCartArticle">
            <a class="wrapCartArticle__delete" href="">Delete</a>
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
    
    }?>




<!-- 
        
        echo '<div class="product">';
        echo '<p>' . $product['product'] . '</p>';
        echo '<img src="../../' . $product['image_url'] . '" alt="' . $product['product'] . '">';
        echo '<p>Price: $' . $product['price'] . '</p>';
        echo "<a href=\"../add-to-session.php?id={$product['id']}\">Add to cart</a>";
        echo '</div>';
    }
} else {
    echo 'Error parsing JSON data.';
} -->
