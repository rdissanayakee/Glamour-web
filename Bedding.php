<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedding</title>
    <link rel="stylesheet" href="Bedding.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
			
	
	

    <link rel="stylesheet" href="bedding.js">
    <script src="bedding.js"></script>
    <script src="bedding.js"></script>

    <style>
        a{
            text-decoration: none !important;
            color: white;
        }
    </style>
</head>
<body>
    <button id="scrollToTopButton" class="scroll-to-top">↑</button>
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
    <br>
    <br>

	<div class="open-text">
        <h1>BEDDING</h1>
        <p>Welcome to Glamour Bedding, your ultimate destination for luxurious and comfortable bedding. Discover a wide selection of premium bed linens, duvets, pillows, and more, designed to provide you with the perfect night's sleep. Our products are crafted from the finest materials to ensure quality and durability, all while adding a touch of elegance to your bedroom.
        </p>
      </div>

<br>



  <!-- Secondary Navigation Bar -->
  <nav class="secondary-navbar">
    <ul class="nav-links1">
        <li><a href="Bedding.php">BEDDING</a></li>
        <li><a href="Bathwear.php">BATH WEAR</a></li>
        <li><a href="HomeEssential.php">HOME ESSENTIAL</a></li>
        
    </ul>
</nav>

<div class="products-container">
                <div class="row product-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                        <div class="product-img-wrapper">
                                <img src="website images/Home & Deco/Beimage1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage1.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Geo-Maze Bedsheet Set</h5>
                                <p>5,800 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Geo-Maze Bedsheet Set&quantity=1&price=5,800 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Bimage2.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage2.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Floral Garden Bedsheet Set</h5>
                                <p>5,600 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Floral Garden Bedsheet Set&quantity=1&price=5,600 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage3.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage3.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Allium Bedsheet Set</h5>
                                <p>6,000 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Allium Bedsheet Set&quantity=1&price=6,000 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage4.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage4.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Baronia Bedsheet Set</h5>
                                <p>5,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Baronia Bedsheet Set&quantity=1&price=5,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage5.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage5.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Nouvelle Bedsheet Set</h5>
                                <p>5,000 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Nouvelle Bedsheet Set&quantity=1&price=5,000 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage6.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage6.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Trapezoid Bedsheet Set</h5>
                                <p>5,100 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Trapezoid Bedsheet Set&quantity=1&price=5,100 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage7.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage7.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Enchanteur Bedsheet Set</h5>
                                <p>5,200 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Enchanteur Bedsheet Set&quantity=1&price=5,200 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage8.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage8.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Artistic Patch Bedsheet Set</h5>
                                <p>5,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Artistic Patch Bedsheet Set&quantity=1&price=5,999 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage9.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage9.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Alyssa White Bedsheet Set</h5>
                                <p>4,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Alyssa White Bedsheet Set&quantity=1&price=4,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage10.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage10.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Alyssa Blue Bedsheet Set</h5>
                                <p>4,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Alyssa Blue Bedsheet Set&quantity=1&price=4,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage11.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage11.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Alyssa White&Blue Bedsheet Set</h5>
                                <p>4,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Alyssa White&Blue Bedsheet Set&quantity=1&price=4,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage12.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage12.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Alyssa Orange Bedsheet Set</h5>
                                <p>4,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Alyssa Orange Bedsheet Set&quantity=1&price=4,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage13.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage13.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Little Monster (S) Bedsheet Set</h5>
                                <p>4,900 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Little Monster (S) Bedsheet Set&quantity=1&price=4,900 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage14.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage14.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Candy Land (S) Bedsheet Set</h5>
                                <p>4,900 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Candy Land (S) Bedsheet Set&quantity=1&price=4,900 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage15.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/BEimage15.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Robots Rule (S) Bedsheet Set</h5>
                                <p>4,900 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Robots Rule (S) Bedsheet Set&quantity=1&price=4,900 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Home & Deco/Beimage16.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Home & Deco/Beimage16.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Royal Bloom (S) Bedsheet Set</h5>
                                <p>5,000 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=1&item_name=Royal Bloom (S) Bedsheet Set&quantity=1&price=5,000 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    
                  
                  
                  
                    <!-- ... Other products go here ... -->
                </div>
                <!-- End of Product Rows -->
            </div>
            <!-- End of Products Section -->
        </div>
        
    </div>
</div>
<div class="brand-logos">
	<img src="website images/Home & Deco/logo1.png" alt="The New York Times">
	<img src="website images/Home & Deco/logo2.png" alt="Vogue">
	<img src="website images/Home & Deco/logo5.png" alt="Vanity Fair">
	<img src="website images/Home & Deco/logo7.png" alt="CNBC">
	<img src="website images/Women images/brand icon 5.jpeg" alt="CNBC">
</div>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
	
		
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