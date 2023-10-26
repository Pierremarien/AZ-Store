<?php
    session_start();
    $productsJson = file_get_contents('../../assets/products.json');
    $products = json_decode($productsJson, true);

    
    if ($products !== null) {
        foreach ($products as $product) {
            
            echo '<div class="product">';
            echo '<p>' . $product['product'] . '</p>';
            echo '<img src="' . $product['image_url'] . '" alt="' . $product['product'] . '">';
            echo '<p>Price: $' . $product['price'] . '</p>';
            echo "<a href=\"../add-to-session.php?id={$product['id']}\">Add to cart</a>";
            echo '</div>';
        }
    } else {
        echo 'Error parsing JSON data.';
    }
    ?>
    <pre>
        <?= var_dump($_SESSION);?>
    </pre>
    