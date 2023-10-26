<?php
require "partials/head.php";
?>


    <header>
        <?php
        require "partials/nav.php";
        ?>
        <div>
            <h1>Shoe the right <span class="blue">one</span></h1>
            <button>See our store</button>
        </div>
        <div>
            <figure>
                <img src="../../assets/img/shoe_one.png" alt="our best shoe">
            </figure>
            <span>NIKE</span>       
        </div>
    </header>
    <main>
        <section>
            <h3><span class="blue">Our</span> last products</h3>
            
            <?php
            
            $productsJson = file_get_contents('../../assets/products.json');
            $products = json_decode($productsJson, true);

            
            if ($products !== null) {
                foreach ($products as $product) {
                    
                    echo '<div class="product">';
                    echo '<p>' . $product['product'] . '</p>';
                    echo '<img src="../../' . $product['image_url'] . '" alt="' . $product['product'] . '">';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo "<a href=\"../add-to-session.php?id={$product['id']}\">Add to cart</a>";
                    echo '</div>';
                }
            } else {
                echo 'Error parsing JSON data.';
            }
            ?>

        </section>
        <section>
            <figure>
                <img src="../../assets/img/shoe_two.png" alt="our second best shoe">
            </figure>
            <h2>We provide you the <span class="blue">best</span> quality</h2>
            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae mollitia cum saepe consequatur iste odio magni adipisci odit nulla, quae omnis a?"</p>
        </section>
        <section>
            <div>
                <figure>
                    <img src="../../assets/img/image-emily.jpg" alt="this is emily">
                </figure>
                <h4>Emily from xyz</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aut harum veniam dolores vitae!</p>
            </div>
            <div>
                <figure>
                    <img src="../../assets/img/image-thomas.jpg" alt="this is thomas">
                </figure>
                <h4>Thomas from corporate</h4>
                <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aut harum veniam dolores vitae!"</p>
            </div>
            <div>
                <figure>
                    <img src="../../assets/img/image-jennie.jpg" alt="this is jennie">
                </figure>
                <h4>Jennie from Nike</h4>
                <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aut harum veniam dolores vitae!"</p>
            </div>
        </section>
    </main>
   <?php
   require "partials/footer.php";
   ?>

