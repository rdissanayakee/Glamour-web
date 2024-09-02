<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour</title>
    <link rel="stylesheet" href="juwellaries.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <link rel="stylesheet" href="kidsShoes.css">
    <script src="kidsShoes.js"></script>
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
                <a href="cart.html" class="nav-icon"><i class="fas fa-shopping-cart"></i></a>
                <a href="login1.php" class="nav-icon"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

	<div class="open-text">
        <h1>FootWear</h1>
        <p>"Put your best foot forward with our fantastic collection of kids' footwear!
             From sporty sneakers to stylish sandals and cozy boots,
             we've got the perfect pair for every adventure. Our shoes are made for running, 
             jumping, and playing all day long—keeping little feet comfy and ready for anything. 
             Find the perfect shoes to step out in style!"  </p>
      </div>

  <!-- Secondary Navigation Bar -->
  <nav class="secondary-navbar">
  <ul class="nav-links1">
        <li><a href="kidsT&D.php">TOPS & DRESS</a></li>
        <li><a href="kidsBottom.php">BOTTOMS</a></li>
        <li><a href="kidsShoes.php">FOOTWEAR</a></li>
        
    </ul>
</nav>

<div class="products-container">
                <div class="row product-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Kids/kidS1.jpg"  alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS2.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Coverse Baby Sneakers</h5>
                                <p>2,899 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS3.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS4.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Sports Boys Sneakers</h5>
                                <p>4,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS5.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS6.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Richer Style Spring shoes </h5>
                                <p>3,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS7.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS8.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Fashion Sport Shoes </h5>
                                <p>3,599 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS9.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS10.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Light Pink Leather Shoes </h5>
                                <p>5,499 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS11.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS12.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info"><br>
                                <h5>Spring Low Cute Sneakers</h5>
                                <p>3,799 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS13.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS14.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Girl Athletic Shoes</h5>
                                <p>4,499 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS15.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS16.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Tennis Shoes</h5>
                                <p>3,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS17.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS18.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Classic Canvas Sneakers</h5>
                                <p>3,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS19.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS20.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Trendy Comfortable Sandals</h5>
                                <p>2,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS21.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS22.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Boy Outdoor Fashion Sandals</h5>
                                <p>2,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS23.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS24.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Blue Fashion Sandals</h5>
                                <p>1,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS25.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS26.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Summer Style Girl Sandals</h5>
                                <p>2,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS27 2.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS28.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Gubotare Little Girl Sandals</h5>
                                <p>3,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS29.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS30.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Floral Knot Decor Flat Sandals</h5>
                                <p>2,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
                                <img src="website images/Kids/kidS31.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidS32.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Girl Clogs Charms Hollow Garden</h5>
                                <p>1,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <i class="fas fa-shopping-cart"></i>
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
	<img src="website images/Women images/brand icon 2.jpeg" alt="The New York Times">
	<img src="website images/Women images/brand icon  1.jpeg" alt="Vogue">
	<img src="website images/Women images/brand icon 4.jpeg" alt="Vanity Fair">
	<img src="website images/Women images/brand icon 5.jpeg" alt="CNBC">
	<img src="website images/Women images/brand icon 3.jpeg" alt="CNBC">
</div>
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