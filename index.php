<?php include 'widgets/header.php';?>

<?php
    $sent = isset($_GET['action']) ? $_GET['action'] : "";

    //directed from delete.php
    if ($sent == 'sent')
    {
        echo "<br><div class='alert-read'>We appreciate your comments!</div>";
    }
?>

<div class="wrapper">

    <?php include 'widgets/menu.php';?>



    <!-- banner -->
    <div class="main-banner">
        <div class="text">
            <h1>D'Calle </h1>
            <p>Tea and Food Hub</p>
        </div>

        <div class="milktea">
            <img src="images/Milktea.png" alt="milktea">
        </div>
    </div>



    <!-- content -->
    <div class="content">
        <div class="left-content">
            <p class="products-header">Choose from our best-seller products!</p>
            <div class="bestseller">   
            <div class="product">
                <a href="product.php?id=1"><img src="images/products/Blueberry-v2.jpg" alt="Blueberry" class="image"></a>
                <div class="info">
                    <p class="product-name">Blueberry</p>
                </div>
            </div>

            <div class="product">
                <a href="product.php?id=2"><img src="images/products/BlueberryCheesecake-v2.jpg" alt="BlueberryCheesecake" class="image"></a>
                <div class="info">
                    <p class="product-name">Blueberry Cheesecake</p>
                </div>
            </div>

            <div class="product">
                <a href="product.php?id=3"><img src="images/products/CookiesNcream-v2.jpg" alt="CookiesNcream" class="image"></a>
                <div class="info">
                    <p class="product-name">Cookies N'cream</p>
                </div>
            </div>

            <div class="product">
                <a href="product.php?id=4"><img src="images/products/HawHaw-v2.jpg" alt="HawHaw" class="image"></a>
                <div class="info">
                    <p class="product-name">HawHaw</p>
                </div>
            </div>

            <div class="product">
                <a href="product.php?id=5"><img src="images/products/NutellaChocolate-v2.jpg" alt="NutellaChocolate" class="image"></a>
                <div class="info">
                    <p class="product-name">Nutella Chocolate</p>
                </div>
            </div>

            <div class="product">
                <a href="product.php?id=6"><img src="images/products/OkinawaBrownSugar-v2.jpg" alt="OkinawaBrownSugar" class="image"></a>
                <div class="info">
                    <p class="product-name">Okinawa Brown Sugar</p>
                </div>
            </div>

            <div class="product">
                <a href="product.php?id=7"><img src="images/products/SakuraStrawberry-v2.jpg" alt="SakuraStrawberry" class="image"></a>
                <div class="info">
                    <p class="product-name">Sakura Strawberry</p>
                </div>
            </div>
                
            <div class="product">
                <a href="product.php?id=8"><img src="images/products/SaltedCaramel-v2.jpg" alt="SaltedCaramel" class="image"></a>
                <div class="info">
                    <p class="product-name">Salted Caramel</p>
                </div>
            </div>
            </div>              
        </div>

        <div class="right-content">
            <a href='promo.html'><img src="images/Banner2.jpg" alt="banner" class="promo-banner"></a>
        </div>
    </div>
    
    

    <!-- testimonials -->
    <div class="testimonials-wrapper">
        <div class="testimonials">
            <p class="testi-header">Jervis Bundalian</p>
            <p class="comment">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium aut dolores ad labore atque quia ut consequatur deserunt, voluptatem similique sapiente, impedit ea autem doloribus culpa veniam fuga distinctio magnam ab dolore hic rem, molestias temporibus! Magnam distinctio ipsum maxime doloremque corporis eum, dignissimos eligendi aspernatur dicta ullam, rem excepturi!</p>
            <p class="date">Date</p>
        </div>

        <div class="testimonials">
            <p class="testi-header">Jervis Bundalian</p>
            <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab repellendus necessitatibus officia incidunt animi quod, sapiente distinctio cumque. Nostrum corrupti reiciendis sit porro aliquam hic libero quos dolores saepe consequatur, ducimus officia ipsam, atque et nesciunt debitis sapiente dolore aliquid architecto quam quidem iure, sunt sint. Quia maiores eveniet magnam!</p>
            <p class="date">Date</p>
        </div>

        <div class="testimonials">
            <p class="testi-header">Jervis Bundalian</p>
            <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, aut unde! Fugiat deserunt eveniet dignissimos exercitationem sit. Ratione pariatur doloribus deserunt mollitia dolore totam cumque et quaerat quae maxime non incidunt suscipit quis dignissimos hic, tempore vel officiis nam ex? Repellat ducimus non id, rem nisi atque dolorum recusandae molestias!</p>
            <p class="date">Date</p>
        </div>
    </div>



    <!-- contact -->
    <div class="contact-wrapper">
        <div class="contact">
            <h1>D'Calle Tea & Food Hub</h1>
            <p>San Vicente Bacolor, Pamapanga</p>
            <p>jeniksbunds@gmail.com</p>
            <p>09662279683</p>
            <img src="images/Map.jpg" width="80%" alt="">
        </div>
    
        <!-- form -->
        <?php include 'widgets/form.php';?>
        

    </div>

</div>

<?php include 'widgets/footer.php';?>