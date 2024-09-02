<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="cheakout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accessories images/logo.png">
    <script src="cheakout.js"></script>
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
                    <li><a href="accessories.php">ACCESSORIES</a></li>
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

    <!-- Checkout -->

    <div class="checkout-step1-wrapper">
        <div class="checkout-step1-container">
            <div class="checkout-step1-content">
                <div class="form-step1-container">
                    <h2><i class="fas fa-clipboard-check"></i> Checkout</h2>
                    <!-- Updated form with action and method -->
                    <form id="checkout-step1-form" action="check.php" method="POST">
                        <div class="form-step1-row">
                            <div class="form-step1-group">
                                <label for="first-name" class="form-step1-label"><i class="fas fa-user"></i> First Name</label>
                                <input type="text" id="first-name" name="first_name" class="form-step1-input" placeholder="First Name" required>
                            </div>
                            <div class="form-step1-group">
                                <label for="last-name" class="form-step1-label"><i class="fas fa-user"></i> Last Name</label>
                                <input type="text" id="last-name" name="last_name" class="form-step1-input" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-step1-group">
                            <label for="address" class="form-step1-label"><i class="fas fa-map-marker-alt"></i> Shipping Address</label>
                            <input type="text" id="address" name="shipping_address" class="form-step1-input" placeholder="Address" required>
                        </div>
                        <div class="form-step1-row">
                            <div class="form-step1-group">
                                <label for="city" class="form-step1-label"><i class="fas fa-city"></i> City</label>
                                <input type="text" id="city" name="city" class="form-step1-input" placeholder="City" required>
                            </div>
                            <div class="form-step1-group">
                                <label for="state" class="form-step1-label"><i class="fas fa-flag"></i> State</label>
                                <select id="state" name="state" class="form-step1-input" required>
                                    <option value="">Select State</option>
                                    <option value="Western Province">Western Province</option>
                                    <option value="Central Province">Central Province</option>
                                    <option value="Southern Province">Southern Province</option>
                                    <option value="North Western Province">North Western Province</option>
                                    <option value="Northern Province">Northern Province</option>
                                    <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                                    <option value="Eastern Province">Eastern Province</option>
                                    <option value="North Central Province">North Central Province</option>
                                    <option value="Uva Province">Uva Province</option>
                                </select>
                            </div>
                            <div class="form-step1-group">
                                <label for="zipcode" class="form-step1-label"><i class="fas fa-mail-bulk"></i> Zipcode</label>
                                <input type="text" id="zipcode" name="zipcode" class="form-step1-input" pattern="[0-9]{5}" placeholder="Zipcode" required>
                            </div>
                        </div>
                        <div class="form-step1-group">
                            <label for="email" class="form-step1-label"><i class="fas fa-envelope"></i> Email Address</label>
                            <input type="email" id="email" name="email" class="form-step1-input" placeholder="Email Address" required>
                        </div>
                        <div class="form-step1-group">
                            <label for="phone" class="form-step1-label"><i class="fas fa-phone"></i> Phone Number (Optional)</label>
                            <input type="tel" id="phone" name="phone" class="form-step1-input" placeholder="Phone Number (Optional)">
                        </div>
                        <div class="form-step1-group checkbox-step1-group">
                            <div class="form-step1-label-checkbox">
                                <input type="checkbox" id="save-contact" name="saveContact" class="form-step1-input-checkbox">
                                <label for="save-contact">Save contact information for future purchases</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-step1-group full-width">
<<<<<<< Updated upstream
                            <button type="onclick" class="button-step1"><i class="fas fa-truck"></i>Order Placed</button>
=======
                            <button type="submit" class="button-step1"><i class="fas fa-truck"></i> Continue to Shipping</button>
>>>>>>> Stashed changes
                        </div>
                    </form>
                </div>
                <div class="cart-step1">
                    <h2><i class="fas fa-shopping-cart"></i> Your Cart</h2>
                    <div class="cart-step1-items"></div>
                    <div class="cart-step1-summary">
                        <div class="cart-step1-summary-item">
                            <span><i class="fas fa-dollar-sign"></i> Subtotal</span>
                            <span id="subtotal">$200</span>
                        </div>
                        <div class="cart-step1-summary-item">
                            <span><i class="fas fa-shipping-fast"></i> Shipping</span>
                            <span id="shipping">Calculated at next step</span>
                        </div>
                        <div class="cart-step1-summary-item">
                            <span><i class="fas fa-money-bill-wave"></i> Total</span>
                            <span id="total">$200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
