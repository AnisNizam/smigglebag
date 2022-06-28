<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="menu.php">menu</a>
        <a href="products.php">products</a>
	<a href="review.php">review</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/12.JPG" alt="">
            <div class="content">
                <h3>Category: Bottle</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/10.JPG" alt="">
            <div class="content">
                <h3>Category: Bottle</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/7.JPG" alt="">
            <div class="content">
                <h3>Category: Stationery</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/8.JPG" alt="">
            <div class="content">
                <h3>Category: stationery</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Enjoy your bag with smiggle bags </h3>
        <p> Refresh yourself for extra play time with the Hi Junior Spritz Drink Bottle. Drinking water has never been so cool with the fun water mister! Perfect for keeping hydrated on the go, nursery or preschool. Smiggle fun n best bag ever</p>
        <a href="#" class="btn">get yours now</a>
    </div>

</section>

<!-- home section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="menu.php">menu</a>
        <a href="products.php">products</a>
	<a href="review.php">review</a>
    </div>

    <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>