<?php
session_start();
require "partials/head.php";
?>


    <header class="index_header">
        <?php
        require "partials/nav.php";
        ?>
        <div class="title">
            <h1><span class="left">Shoe the </span>right <span class="blue">one</span>.</h1>
            <button class="btn btn--store">See our store</button>
        </div>
        <div class="best_shoe">
            <figure>
                <img src="../assets/img/shoe_one.png" alt="our best shoe">
            </figure>
            <span class="filigrane">NIKE</span>       
        </div>
    </header>
    <main>
        <section class="latest_products">
            <h3><span class="blue">Our</span> last products</h3>
            
            <?php
            
            $productsJson = file_get_contents('../assets/products.json');
            $products = json_decode($productsJson, true);

            
            if ($products !== null) {
                foreach ($products as $product) {
                    
                    echo '<div class="product">';
                    echo '<figure> <img src="../' . $product['image_url'] . '" alt="' . $product['product'] . '"> </figure>';
                    echo '<div class="product_wrapper">';
                    echo '<div class="product_wrapper_info">';
                    echo '<p class="product_wrapper_info_name">' . $product['product'] . '</p>';
                    echo '<p class="product_wrapper_info_price">' . $product['price'] . '&euro;</p>';
                    echo '</div>';
                    echo "<a class='btn' href=\"add-to-session.php?id={$product['id']}\">Add to cart</a>";
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'Error parsing JSON data.';
            }

            ?>

        </section>
        <section class="pub">
            <figure>
                <img class="pub__img" src="../assets/img/shoe_two.png" alt="our second best shoe" width="350">
            </figure>
            <h2 class="pub__title">We provide you the <span class="blue">best</span>quality</h2>
            <p class="pub__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae mollitia cum saepe consequatur iste odio magni adipisci odit nulla, quae omnis a?"</p>
        </section>
        <section class="partners">
            <div class="partner">
                <figure>
                    <img src="../assets/img/image-emily.jpg" alt="this is emily">
                </figure>
                <h4>Emily from xyz</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aut harum veniam dolores vitae!</p>
            </div>
            <div class="partner">
                <figure>
                    <img src="../assets/img/image-thomas.jpg" alt="this is thomas">
                </figure>
                <h4>Thomas from corporate</h4>
                <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aut harum veniam dolores vitae!"</p>
            </div>
            <div class="partner">
                <figure>
                    <img src="../assets/img/image-jennie.jpg" alt="this is jennie">
                </figure>
                <h4>Jennie from Nike</h4>
                <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aut harum veniam dolores vitae!"</p>
            </div>
        </section>
    </main>
   <?php
   require "partials/footer.php";
   ?>

