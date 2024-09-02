<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour</title>
    <link rel="stylesheet" href="contact us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <link rel="stylesheet" href="contact-us.css">
    <script src="contact us.js"></script>
</head>
<body>
    <button id="scrollToTopButton" class="scroll-to-top">↑</button>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <div class="left-section">
                <a href="index.html" class="brand">Glamour</a>
                <ul class="nav-links">
                    <li><a href="men's collection.html">MEN</a></li>
                    <li><a href="women's collection.html">WOMEN</a></li>
                    <li><a href="kids.html">KIDS</a></li>
                    <li><a href="Home&Deco.html">HOME & DECO</a></li>
                    <li><a href="accesories.html">ACCESORIES</a></li>
                    <li><a href="personalcare.main.html">PERSONAL CARE</a></li>
                    <li><a href="Aboutus.html">ABOUT US</a></li>
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
                <a href="login.html" class="nav-icon"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

    <div class="H1container">
        <div class="left-side">
            <div class="contact-info">
                <h1>CONTACT</h1>
                <p><strong>Phone</strong> <br>(077) 053 3426</p>
                <p><strong>Support</strong><br>glamour@gmail.com</p>
            </div>
            <br>
            <br>
            <div class="send-message">
                <h2>Send Message</h2>
                <!-- Update form action to match PHP script path -->
                <form id="contact-form" method="POST" action="contact.php">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
        <div class="right-side">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.5644921526186!2d-74.09899868438625!3d40.979417979303135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2ecb579716177%3A0x4009a00f9521c1d9!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sin!4v1691423127043!5m2!1sen!2sin" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
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
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Returns & Exchanges Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
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
    <script src="contact-us.js"></script>
</body>
</html>
