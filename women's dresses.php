<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dresses</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <link rel="stylesheet" href="women's dresses.css">
    <script src="women's dresses.js"></script>


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
        <h1>DRESSES</h1>
        <p>Transform your look and make a statement with our 
            women's dresses that fit your unique personality and style. Elevate your 
            wardrobe with our versatile range of formal and casual attire, suitable for any season. Find your new favorite dress today!</p>
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
                                <img src="website images/Women images/dresses 1-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 1-2" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Floral Sundress</h5>
                                <p>4290.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Floral Sundress=1&price=4290.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 2-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 2-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>White Satin Slip Dress</h5>
                                <p>3260.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=White Satin Slip Dress=1&price=3260.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/dresses 3-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 3-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Black Lace Corset Dress</h5>
                                <p>4100.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Black Lace Corset Dress=1&price=4100.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/dresses 4-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 4-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>White Puff Sleeve Dress</h5>
                                <p>4300.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=White Puff Sleeve Dress=1&price=4300.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 5-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 5-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Crimson Dream A-line Dress</h5>
                                <p>2890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 6-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 6-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Ivory Embrace bodycon Dress</h5>
                                <p>4670.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 7-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 7-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Azure Mist hooded Dress</h5>
                                <p>4320.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 8-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 8-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Seafoam Waves cut-out Mini Dress
                                </h5>
                                <p>6540.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 9-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 9-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Scarlet Elegance maxi Dress</h5>
                                <p>3450.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 10-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 10-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Blush Whisper ruched Bodycon Dress</h5>
                                <p>2890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/dresses 11-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 11-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Snowy Grace strapless Mini Dress</h5>
                                <p>3670.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/dresses 12-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 12-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Desert Rose sheer Ruched Dress</h5>
                                <p>5430.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 13-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 13-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Red bodycon dress</h5>
                                <p>4560.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 14-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 14-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Pleated floral dress</h5>
                                <p>3250.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 15-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 15-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Ruffle shift dress</h5>
                                <p>3670.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/dresses 16-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/dresses 16-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Mustard skater dress</h5>
                                <p>4570.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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