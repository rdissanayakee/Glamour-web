<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Womens</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <link rel="stylesheet" href="women's collection.css">
    <script src="women's collection.js"></script>
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
        <h1>WOMEN</h1>
    </div>

<!-- video banner section -->
    <div class="banner-video-container">
        <video class="banner-video" autoplay muted loop>
            <source src="website images/Women images/women vedio 2.mp4" type="video/mp4">
        </video>
    </div>
<br>
<br>

<!-- New Arrivals -->
<div class="container">
    <h2 class="animated-heading">New Arrivals</h2>
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
<br>
<br>
<br>


<!-- sale banner -->
<div class="banner-container">
    <div class="banner-content">
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
        <span>50% OFF on New Arrivals</span>
    </div>
</div>
<br>
<br>

<!-- Products -->
            <!-- Product 1 -->
            <div class="products-container">
                <div class="row product-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/main pg img 6.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 5.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Basic instinct midi dress</h5>
                                <p>3850.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=1&item_name=Basic instinct midi dress&quantity=1&price=3850.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="1">
                            <input type="hidden" name="product_name" value="Basic Instinct Midi Dress">
                            <input type="hidden" name="product_price" value="3850.00">
                            <button type="submit" class="add-to-cart"><i class="fas fa-shopping-cart">add to cart</i></button>
                        </form>
                    </div>
            <!-- Product 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/main pg img 8.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 7.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>High neck navy blue dress</h5>
                                <p>3450.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=2&item_name=High neck navy blue dress&quantity=1&price=3450.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
            <!-- Product 3 -->        
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
								<img src="website images/Women images/main pg img 10.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 9.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Cute high waist jeans</h5>
                                <p>5780.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=3&item_name=Cute high waist jeans&quantity=1&price=5780.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
            <!-- Product 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
								<img src="website images/Women images/main pg img 12.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 11.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Women's sweatpants</h5>
                                <p>4500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=4&item_name=Womens sweatpants&quantity=1&price=4500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                        </div>
            <!-- Product 5 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/main pg img 14.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 13.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Lemon lime eyelet crop top</h5>
                                <p>2450.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=5&item_name=Lemon lime eyelet crop top&quantity=1&price=2450.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
            <!-- Product 6 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/main pg img 15.avif" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 16.avif" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Backless tank top</h5>
                                <p>2250.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=6&item_name=Backless tank top&quantity=1&price=2250.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
            <!-- Product 7 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/main pg img 1.webp" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 2.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>White ballet flats</h5>
                                <p>6750.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=7&item_name=White ballet flats&quantity=1&price=6750.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
            <!-- Product 8 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/Women images/main pg img 3.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/Women images/main pg img 4.webp" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Black suede heels</h5>
                                <p>6500.00 LKR</p>
                            </div>
                            <div class="add-to-cart">
                                <a href="add_to_cart2.php?item_id=8&item_name=Black suede heels&quantity=1&price=6500.00 LKR"><i class="fas fa-shopping-cart"></i></a>
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
            <script>
        // JavaScript function to handle the form submission without page reload
        function addToCart(form) {
            var formData = new FormData(form);
            fetch('add_to_cart.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text()).then(data => {
                // Handle the response from the server
                alert('Product added to cart successfully!');
            }).catch(error => {
                console.error('Error adding product to cart:', error);
            });
            return false; // Prevent the default form submission
        }
    </script>
		</body>
</html>