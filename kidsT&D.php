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
    <link rel="stylesheet" href="kidsT&D.css">
    <script src="kidsT&D.js"></script>

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

	<div class="open-text">
        <h1>TOPS & DRESS</h1>
        <p>"Get ready to twirl, play, and explore in our magical collection of Tops & Dresses!
             Whether you're looking for bright colors, fun patterns, or the softest fabrics,
              we’ve got just the thing to make every day feel special. Perfect for all your adventures,
             our clothes are as comfy as they are cute. Let’s find your new favorite outfit!"</p>
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
                                <img src="website images/Kids/kidTD1.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD2.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Summer Yellow  Frock</h5>
                                <p>1,899 LKR</p>
                            </div>
                            <div class="add-to-cart">
                               <a href="add_to_cart2.php?item_id=11&item_name=Summer Yellow  Frock&price=1,899 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD3.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD4.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Button and Pockt Front Dress</h5>
                                <p>2,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Button and Pockt Front Dress&price=2,999 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD5.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD6.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Houndstooth Dress</h5>
                                <p>3,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Houndstooth Dress&price=3,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD7.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD8.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Textured Ruffled Dress</h5>
                                <p>2,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Textured Ruffled Dress&price=2,999 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD9.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD10.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Hilifiger Monotype Stripe T-shirt</h5>
                                <p>2,499 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Hilifiger Monotype Stripe T-shirt&price=2,499 LKRR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD11.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD12.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info"><br>
                                <h5>Grown Cotton Logo Polo Shirt</h5>
                                <p>1,799 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Grown Cotton Logo Polo Shirt&price=1,799 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD13.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD14.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Hilifiger Monotype Stripe T-shirt</h5>
                                <p>2,499 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Hilifiger Monotype Stripe T-shirt&price=2,499 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kid15.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kid16.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Printe Message T-shirt</h5>
                                <p>1,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Printe Message T-shirt&price=1,500 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD15.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD16.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Blue & White Longe Sleeved Top</h5>
                                <p>3,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Blue & White Longe Sleeved Top&price=3,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD17.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD18.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Bow Front Long Sleeved Top</h5>
                                <p>2,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Bow Front Long Sleeved Top&price=2,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD19.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD20.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Embroidery Button Front Top</h5>
                                <p>2,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Embroidery Button Front Top&price=2,500 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD21.jpeg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD22.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Light Blue Frill Top</h5>
                                <p>1,400 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Light Blue Frill Top&price=1,400 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kid1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kid2.jpeg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Corduroy Jacket</h5>
                                <p>3,500 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Corduroy Jacket&price=3,500 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD23.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD24.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Grown Cotton Logo Polo Shirt</h5>
                                <p>1,799 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Grown Cotton Logo Polo Shirt&price=1,799 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD26.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD25.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Coloburst Polo Strech Shirt</h5>
                                <p>1,799 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Coloburst Polo Strech Shirt&price=1,799 LKR"><i class="fas fa-shopping-cart"></i></a>
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
                                <img src="website images/Kids/kidTD27.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Kids/kidTD28.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Chaser Surf's Up Shirt</h5>
                                <p>2,200 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Chaser Surf's Up Shirt&price=2,200 LKR"><i class="fas fa-shopping-cart"></i></a>
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