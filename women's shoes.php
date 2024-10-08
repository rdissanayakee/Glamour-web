<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <link rel="stylesheet" href="women's shoes.css">
    <script src="women's shoes.js"></script>
    <style>
        a{
            text-decoration: none !important;
            color: white;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar">
    <div class="container">
        <div class="left-section">
            <a href="index.php" class="brand">Glamour</a>
            <ul class="nav-links">
                    <li><a href="men's collection.php">MEN</a></li>
                    <li><a href="women_collection.php">WOMEN</a></li>
                    <li><a href="kids.phpl">KIDS</a></li>
                    <li><a href="Home&Deco.php">HOME & DECO</a></li>
                    <li><a href="accesories.php">ACCESSORIES</a></li>
                    <li><a href="personalcare.main.php">PERSONAL CARE</a></li>
                    <li><a href="Aboutus.php">ABOUT US</a></li>
                    <li>
                  <div class="search__container">
                    <i class="fas fa-search search__icon"></i>
                    <input class="search__input" type="text" placeholder="Search">
                  </div>
                </li>
            </ul>
        </div>
        <div class="right-section">
            <a href="cart.php" class="nav-icon"><i class="fas fa-shopping-cart"></i></a>
            <a href="login1.php" class="nav-icon"><i class="fas fa-user"></i> Login</a>
        </div>
    </div>
</nav>

<!-- Open text -->
    <div class="open-text">
        <h1>SHOES</h1>
        <p>For those looking to express 
            their love for footwear with flair, 
            there are numerous sassy captions tailored for sneakerheads and stiletto lovers alike. </p>
    </div>
    	
<!-- Secondary Navigation Bar -->
<nav class="secondary-navbar">
<ul class="nav-links1">
        <li><a href="women's dresses.php">DRESSES</a></li>
        <li><a href="women's tops.php">TOPS</a></li>
        <li><a href="women's shoes.php">SHOES</a></li>
        <li><a href="women's bttoms.php">BOTTOMS</a></li>
    </ul>
</nav>

<!-- Products -->
            <div class="products-container">
                <div class="row product-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 1-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 1-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Coral Chic Heels</h5>
                                <p>7800.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    s
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 2-1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 2-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Elegant Ivory Sandals</h5>
                                <p>6750.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Elegant Ivory Sandals&quantity=1&price=6750.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 3-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 3-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Nude Glam Mules</h5>
                                <p>5890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Nude Glam Mules&quantity=1&price=5890.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 4-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 4-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Tan Strappy Heels</h5>
                                <p>6890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Tan Strappy Heels&quantity=1&price=6890.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 5-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 5-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Black Pearl Heels</h5>
                                <p>4500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 6-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 6-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Ivory Glam Sandals</h5>
                                <p>3450.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 7-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 7-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Black Buckle Flats</h5>
                                <p>6500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 8-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 8-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Brown Croc Slides</h5>
                                <p>5700.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    
            <div class="products-container">
                <div class="row product-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 9-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 9-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Gold Strappy Heels</h5>
                                <p>8500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 10-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 10-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Colorful Lace-Up Heels</h5>
                                <p>7890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 11-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 11-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Leopard Print Block Heels</h5>
                                <p>6750.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 12-1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 12-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Black Mary Jane Flats</h5>
                                <p>4300.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 13-1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 13-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>White Platform Sandals with Cork Heels</h5>
                                <p>6740.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 14-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 14-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>ortoiseshell Platform Heels</h5>
                                <p>5460.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 15-1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 15-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Multicolored Strappy Platform Heels</h5>
                                <p>5890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/shoes 16-1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/shoes 16-2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>White Strappy Kitten Heel Sandals</h5>
                                <p>6890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=26&item_name=Coral Chic Heels&quantity=1&price=7800.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<br>
<br>
<br>

<!-- Brand Logos -->
<div class="brand-logos">
	<img src="website images/Women images/brand icon 2.jpeg" alt="H&M">
	<img src="website images/Women images/brand icon  1.jpeg" alt="Vogue">
	<img src="website images/Women images/brand icon 4.jpeg" alt="Under Armer">
	<img src="website images/Women images/brand icon 5.jpeg" alt="Zara">
	<img src="website images/Women images/brand icon 3.jpeg" alt="Puma">
</div>
<br>
<br>
<br>

<!-- Footer -->
			<footer class="footer">
				<div class="footer-container">
					<div class="footer-section">
						<h2 class="footer-brand">GLAMOUR</h2>
						<p>GLAMOUR, retail chain takes pride in its Sri Lankan roots but offers a world-class retail experience that drives customer loyalty while simultaneously setting new benchmarks in customer-centricity to take the art of retailing to a new level.</p>
					</div>
					<div class="footer-section">
						<h3>COMPANY & OUR POLICIES</h3>
						<ul>
							<li><a href="contact us.html">Contact Us</a></li>
							<li><a href="contact us.html">Privacy Policy</a></li>
							<li><a href="contact us.html">Shipping Policy</a></li>
							<li><a href="contact us.html">Returns & Exchanges Policy</a></li>
							<li><a href="contact us.html">Terms of Service</a></li>
						</ul>
					</div>
					<div class="footer-section">
						<h3>CONTACT US</h3>
						<p>Order Updates - (077) 053 3426</p>
						<p>General Email - glamour@gmail.com</p>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="social-icons">
						<a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
						<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
						<a href="https://www.tiktok.com/"><i class="fab fa-tiktok"></i></a>
						<a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
					</div>
					<p>&copy; 2024 Online Store. All rights reserved</p>
				</div>
			</footer>
		</body>
</html>