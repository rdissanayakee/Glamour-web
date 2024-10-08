<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bottoms</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <link rel="stylesheet" href="women's bttoms.css">
    <script src="women's bttoms.js"></script>

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
                <li><a href="kids.php">KIDS</a></li>
                <li><a href="Home&Deco.php">HOME & DECO</a></li>
                <li><a href="accesories.php">ACCESORIES</a></li>
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
        <h1>BOTTOMS</h1>
        <p>Discover your new go-to bottoms that are made to take you from 
            day to play in stylish comfort. From denim pants and skirts to comfy joggers and cute rompers, 
            our collection has everything you need. Mix and match your way to fabulousness!</p>
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
                                <img src="website images/Women images/bottoms 1-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 1-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Olive Green Pants</h5>
                                <p>3500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Olive Green Pants&quantity=1&price=3500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 2-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 2-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Brown Lace-Up Pants</h5>
                                <p>3460.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Brown Lace-Up Pants&quantity=1&price=3460.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/bottoms 3-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 3-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Ripped Denim Shorts</h5>
                                <p>3890.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Ripped Denim Shorts&quantity=1&price=3890.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/bottoms 4-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 4-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Distressed Jeans </h5>
                                <p>4560.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 5-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 5-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Patchwork Denim Skirt</h5>
                                <p>3450.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans &quantity=1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 6-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 6-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Denim Mini Skirt</h5>
                                <p>2450.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 7-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 7-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Light Denim Midi Skirt with Slit</h5>
                                <p>3250.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 8-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 8-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Blue Skinny Jeans</h5>
                                <p>4670.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans &quantity=1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 9-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 9-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Ripped Jeans</h5>
                                <p>4750.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 10-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 10-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Denim Shorts</h5>
                                <p>2500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans &quantity=1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/bottoms 11-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 11-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Wide-Leg Jeans</h5>
                                <p>5200.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
								<img src="website images/Women images/bottoms 12-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 12-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>High-Waisted Jeans</h5>
                                <p>5670.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 13-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 13-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Maroon Joggers</h5>
                                <p>3460.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 14-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 14-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Red Leather Skirt</h5>
                                <p>3860.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 15-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 15-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>High waist wide-Leg Jeans</h5>
                                <p>5780.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans&quantity =1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Women images/bottoms 16-1.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/bottoms 16-2.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Mint Green Shorts</h5>
                                <p>2460.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Distressed Jeans &quantity=1&price=4560.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
							<li><a href="contact us.php">Contact Us</a></li>
							<li><a href="contact us.php">Privacy Policy</a></li>
							<li><a href="contact us.php">Shipping Policy</a></li>
							<li><a href="contact us.php">Returns & Exchanges Policy</a></li>
							<li><a href="contact us.php">Terms of Service</a></li>
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