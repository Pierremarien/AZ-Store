<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ-Store</title>
    <link rel="stylesheet" href="../../scss/style.css">
</head>
<body>
    <header>
        <nav>
            <div>
                <h5>AZ&#91;store&#93;</h5>
            </div>
            <div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div>
            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            width="800px" height="800px" viewBox="0 0 902.86 902.86"
            xml:space="preserve">
            <g>
                <g>
                    <path d="M671.504,577.829l110.485-432.609H902.86v-68H729.174L703.128,179.2L0,178.697l74.753,399.129h596.751V577.829z
                        M685.766,247.188l-67.077,262.64H131.199L81.928,246.756L685.766,247.188z"/>
                    <path d="M578.418,825.641c59.961,0,108.743-48.783,108.743-108.744s-48.782-108.742-108.743-108.742H168.717
                        c-59.961,0-108.744,48.781-108.744,108.742s48.782,108.744,108.744,108.744c59.962,0,108.743-48.783,108.743-108.744
                        c0-14.4-2.821-28.152-7.927-40.742h208.069c-5.107,12.59-7.928,26.342-7.928,40.742
                        C469.675,776.858,518.457,825.641,578.418,825.641z M209.46,716.897c0,22.467-18.277,40.744-40.743,40.744
                        c-22.466,0-40.744-18.277-40.744-40.744c0-22.465,18.277-40.742,40.744-40.742C191.183,676.155,209.46,694.432,209.46,716.897z
                        M619.162,716.897c0,22.467-18.277,40.744-40.743,40.744s-40.743-18.277-40.743-40.744c0-22.465,18.277-40.742,40.743-40.742
                        S619.162,694.432,619.162,716.897z"/>
                </g>
            </g>
            </svg>
            <a href="#">Login</a>
            </div>
        </nav>
        <div>
            <h1>Shoe the right <span>one</span></h1>
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
            <h3><span>Our</span> last products</h3>
            
            <?php
            
            $productsJson = file_get_contents('../../assets/products.json');
            $products = json_decode($productsJson, true);

            
            if ($products !== null) {
                foreach ($products as $product) {
                    
                    echo '<div class="product">';
                    echo '<p>' . $product['product'] . '</p>';
                    echo '<img src="../../' . $product['image_url'] . '" alt="' . $product['product'] . '">';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo '<button>Add to Cart</button>';
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
            <h2>We provide you the <span>best</span> quality</h2>
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
    <footer>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </footer>
</body>
</html>

