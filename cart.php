<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Shopping Cart">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css" type="text/css">


    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
</head>
<body>
 <!-- Navigation Bar -->
 <nav class="navbar">
    <div class="container">
        <div class="left-section">
            <a href="index.php" class="brand">Glamour</a>
            <ul class="nav-links">
                <li><a href="men's collection.php">MEN</a></li>
                <li><a href="women's collection.php">WOMEN</a></li>
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






     <!-- cart items -->
     <main>
        <div class="containercc cart-container">
            <div class="cart-items">
                <h2>Your Cart</h2>
                <div class="cart-item" data-id="1">
                    <img src="website images/Women images/bottoms 8-1.avif" alt="Men's winter jacket">
                    <div class="item-details">
                        <h3>Men's winter jacket</h3>
                        <p>Size: L</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$99</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="2">
                    <img src="website images/men'scollection/loungewear12.jpg" alt="Men's casual shirt">
                    <div class="item-details">
                        <h3>Men's casual shirt</h3>
                        <p>Size: M</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$49</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="3">
                    <img src="website images/men'scollection/tshirt.9.2.jpg" alt="Running shoes">
                    <div class="item-details">
                        <h3>Running shoes</h3>
                        <p>Size: 42</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$79</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="4">
                    <img src="website images/Women images/dresses 7-1.avif" alt="Women's summer dress">
                    <div class="item-details">
                        <h3>Women's summer dress</h3>
                        <p>Size: S</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$69</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="5">
                    <img src="website images/Home & Deco/Beimage16.1.jpg" alt="Sun hat">
                    <div class="item-details">
                        <h3>Sun hat</h3>
                        <p>Size: One Size</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$29</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="6">
                    <img src="website images/Kids/kidTD16.jpg" alt="Leather handbag">
                    <div class="item-details">
                        <h3>Leather handbag</h3>
                        <p>Color: Black</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$149</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="7">
                    <img src="website images/Kids/kidsB22.jpg" alt="Smartwatch">
                    <div class="item-details">
                        <h3>Smartwatch</h3>
                        <p>Color: Silver</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$199</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="8">
                    <img src="website images/personal care/cos7..jpg" alt="Crew socks">
                    <div class="item-details">
                        <h3>Crew socks</h3>
                        <p>Size: M</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$15</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="9">
                    <img src="website images/men'scollection/tshirt6.2.jpg" alt="Leather belt">
                    <div class="item-details">
                        <h3>Leather belt</h3>
                        <p>Size: 36</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$39</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <div class="cart-item" data-id="10">
                    <img src="website images/accesories images/a3.jfif" alt="Sunglasses">
                    <div class="item-details">
                        <h3>Sunglasses</h3>
                        <p>Color: Black</p>
                        <div class="quantity-control">
                            <button class="quantity-btn minus">-</button>
                            <span class="quantity-display">1</span>
                            <button class="quantity-btn plus">+</button>
                        </div>
                        <p class="item-price">$99</p>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
            </div>
            <div class="order-summary">
                <h2>Order Summary</h2>
                <label for="coupon">Enter coupon code here</label>
                <input type="text" id="coupon">
                <div class="summary-details">
                    <p>Subtotal: $867</p>
                    <p>Shipping: Calculated at the next step</p>
                    <p>Total: $867</p>
                </div>
                <a href="cheakout.php" class="checkout-btn-link">
                    <button class="checkout-btn">Continue to checkout</button>
                </a>
            </div>
        </div>
    </main>

<!-- Footer  -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h2 class="footer-brand">GLAMOUR</h2>
            <p>GLAMOUR, retail chain takes pride in its Sri Lankan roots but offers a world-class retail experience that drives customer loyalty while simultaneously setting new benchmarks in customer-centricity to take the art of retailing to a new level.</p>
        </div>
        <div class="footer-section">
            <h3>COMPANY & OUR POLICIES</h3>
            <ul>
                <li><a href="contact us.php">About Us</a></li>
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


 <script src="cart.js"></script>
</body>
</html>
