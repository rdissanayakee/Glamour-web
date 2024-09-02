<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour</title>
    <link rel="stylesheet" href="men's collection.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">	
	
	

    <link rel="stylesheet" href="men's collection.css">
    <script src="men's collection.js"></script>
    
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

	<div class="open-text">
        <h1>MEN</h1>
    </div>
    </div>


        <!-- video banner section -->

<div class="banner-video-container">
    <video class="banner-video" autoplay muted loop>
        <source src="website images/men'scollection/vid22.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </div>

  <br>
<!--new arrivels-->
  <div class="container">
    <h2 class="animated-heading">New Arrivals</h2>
</div>


	<!-- Secondary Navigation Bar -->
    <nav class="secondary-navbar">
        <ul class="nav-links1">
            <li><a href="men's t-shirt.php">T-SHIRTS</a></li>
            <li><a href="men's bottom.php">BOTTOMS</a></li>
            <li><a href="men's loungewear.php">LOUNGEWEAR</a></li>
            <li><a href="men's shoes.php">FOOTWEAR</a></li>
        </ul>
    </nav>


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

            <div class="products-container">
                <div class="row product-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/1.1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/1.2.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
							<div class="product-info">
                                <h5>Light Beidge Long Slevee T-Shirt</h5>
                                <p> 5990 LKR</p>
                            </div>
                         
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=11&item_name=Light Beidge Long Slevee T-Shirt&quantity=1&price=5990.00 LKR"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                        <form action="add_to_cart.php" method="POST">
                            <input type="hidden" name="product_id" value="11">
                            <input type="hidden" name="product_name" value="Light Beidge Long Slevee T-Shirt">
                            <input type="hidden" name="product_price" value="5990.00">
                            <button type="submit" class="add-to-cart"><i class="fas fa-shopping-cart">add to cart</i></button>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/2.2.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/2.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Brown Polo Coloerd T-shirt</h5>
                                <p>4580LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=12&item_name=Brown Polo Coloerd T-shirt&quantity=1&price=4580.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/3.2.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/3.1.jpj.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>White Bottom</h5>
                                <p>3999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=13&item_name=White Bottom&quantity=1&price=3999.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/b2.2.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/b1.1.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5> Bermudy Baggy Shorts</h5>
                                <p>8,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=14&item_name=Bermudy Baggy Shorts&quantity=1&price=8999.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/l1.2.jpg"  alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/l1.1.jpg"  alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Black Loungewear Set</h5>
                                <p>7499 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=15&item_name=Black Loungewear Set&quantity=1&price=7499.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/l.2.1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/l2.2.jpg"     alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Pique T-Shirt And Short Set </h5>
                                <p>6890 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=16&item_name=Pique T-Shirt And Short Set&quantity=1&price=6890.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/shoes1.1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/shoes1.2.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Puma Super Team Velvet </h5>
                                <p>13,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=17&item_name=Puma Super Team Velvet&quantity=1&price=13999.00 LKR"><i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
                            <h3 id="itemName"></h3>
                            <p>is added to cart!</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-img-wrapper">
                                <img src="website images/men'scollection/shoes2.1.jpg" alt="Product 1" class="product-img primary">
                                <img src="website images/men'scollection/shoes2.2.jpg" alt="Product 1 Hover" class="product-img secondary">
                            </div>
                            <div class="product-info">
                                <h5>Puma malachite yellow sizzle</h5>
                                <p>7,999 LKR</p>
                            </div>
                            <div class="add-to-cart">
                            <a href="add_to_cart2.php?item_id=18&item_name=Puma malachite yellow sizzle&quantity=1&price=7999.00 LKR"> <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="popup-notification" id="popupNotification">
                            <img src="website images/men'scollection/add to cart men's .gif " alt="Success" class="popup-icon">
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
	<img src="website images/men'scollection/H&M brand2.jpeg" alt="H&M">
	<img src="website images/men'scollection/vogue barnd 1.jpeg" alt="Vogue">
	<img src="website images/men'scollection/under r brand4.jpeg" alt="UnderR">
	<img src="website images/men'scollection/zara brand5.jpeg" alt="zara">
	<img src="website images/men'scollection/puma brand3.jpeg" alt="puma">
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