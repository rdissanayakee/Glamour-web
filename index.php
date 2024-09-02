<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Clothings</title>

    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="icon" type="image/png" href="website images/accesories images/logo.png">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Mulish:wght@300;900&display=swap" rel="stylesheet">

<body>
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
                    <li><a href="accesories.html">ACCESSORIES</a></li>
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
                <a href="login1.php" class="nav-icon"><i class="fas fa-user"></i> Login</a>
            </div>
        </div>
    </nav>

<br>
    <!-- Slideshow animation -->
    <section class="slider-container">
        <div class="slider-images">
            <div class="slider-img">
                <img src="Home-page-images/Slide men.jpg" alt="1" />
                <h1>Men</h1>
                <div class="details">
                    <h2>Men</h2>
                    <p>Shop Now ></p>
                </div>
            </div>
            <div class="slider-img">
                <img src="Home-page-images/Slide women.jpg" alt="2" />
                <h1>Women</h1>
                <div class="details">
                    <h2>Women</h2>
                    <p>Shop now >></p>
                </div>
            </div>
            <div class="slider-img">
                <img src="Home-page-images/Slide kids.jpg " alt="3" />
                <h1>Kids</h1>
                <div class="details">
                    <h2>Kids</h2>
                    <p>Shop now >></p>
                </div>
            </div>
            <div class="slider-img active">
                <img src="Home-page-images/Slide accessories.jpg" alt="4" />
                <h1>Accessories</h1>
                <div class="details">
                    <h2>Accessories</h2>
                    <p>Shop now >></p>
                </div>
            </div>
            <div class="slider-img">
                <img src="Home-page-images/Slide personal care.jpg" alt="5" />
                <h1>Personal Care</h1>
                <div class="details">
                    <h2>Personal Care</h2>
                    <p>Shop now >></p>
                </div>
            </div>
            <div class="slider-img">
                <img src="Home-page-images/Slide h&d.jpg" alt="6" />
                <h1>Home & Deco</h1>
                <div class="details">
                    <h2>Home And Deco</h2>
                    <p>Shop now >></p>
                </div>
            </div>
        </div>
    </section>
<br>
<br>


<!-- Categories -->
<div class="category-container">
  <h2 class="category-title">Explore Our Categories</h2>
  <div class="category-grid">
    <div class="category-card men">
      <img src="Home-page-images/men-category.jpg" alt="Men">
      <div class="overlay-info">
        <h2>MEN</h2>
      </div>
      <div class="category-overlay">
        <h3>MEN</h3>
        <p>Discover the latest trends in men's fashion</p>
        <a href="men's collection.html" class="category-link">Shop Now</a>
      </div>
    </div>
    <div class="category-card women">
      <img src="Home-page-images/women.jpg" alt="Women">
      <div class="overlay-info">
        <h2>WOMEN</h2>
      </div>
      <div class="category-overlay">
        <h3>WOMEN</h3>
        <p>Explore the latest styles in women's fashion</p>
        <a href="women's collection.html" class="category-link">Shop Now</a>
      </div>
    </div>
    <div class="category-card kids">
      <img src="Home-page-images/kids-category.jpg" alt="Kids">
      <div class="overlay-info">
        <h2>KIDS</h2>
      </div>
      <div class="category-overlay">
        <h3>KIDS</h3>
        <p>Find the cutest and trendiest kids' clothing</p>
        <a href="kids.html" class="category-link">Shop Now</a>
      </div>
    </div>
    <div class="category-card personal-care">
      <img src="Home-page-images/pc-category.jpg" alt="Personal Care">
      <div class="overlay-info">
        <h3>PERSONAL CARE</h3>
      </div>
      <div class="category-overlay">
        <h3>PERSONAL CARE</h3>
        <p>Take care of yourself with our personal care products</p>
        <a href="personalcare.main.html" class="category-link">Shop Now</a>
      </div>
    </div>
    <div class="category-card home-deco">
      <img src="Home-page-images/home-and-deco.jpg" alt="Home & Deco">
      <div class="overlay-info">
        <h3>HOME AND DECO</h3>
      </div>
      <div class="category-overlay">
        <h3>HOME & DECO</h3>
        <p>Discover unique home decor and furniture pieces</p>
        <a href="Home&Deco.html" class="category-link">Shop Now</a>
      </div>
    </div>
    <div class="category-card accessories">
      <img src="Home-page-images/accesories.jpg" alt="Accessories">
      <div class="overlay-info">
        <h3>ACCESSORIES</h3>
      </div>
      <div class="category-overlay">
        <h3>ACCESSORIES</h3>
        <p>Complete your outfit with our fashion accessories</p>
        <a href="accesories.html" class="category-link">Shop Now</a>
      </div>
    </div>
  </div>
</div>
  <br>

<!-- video banner section -->
<div class="banner-video-container">
  <video class="banner-video" autoplay muted loop>
      <source src="Home-page-images/v6.mp4" type="video/mp4">
      Your browser does not support the video tag.
  </video>
  <div class="overlay-text">
    <h2>Discover The Latest Fashion</h2>
  </div>
</div>


<br><br>
<!-- Brand Logos -->
<div class="brand-logos">
  <img src="Home-page-images/brand icon  1.jpeg" alt="H&M">
  <img src="Home-page-images/brand icon 2.jpeg" alt="Vogue">
  <img src="Home-page-images/brand icon 3.jpeg" alt="Under Armer">
  <img src="Home-page-images/brand icon 4.jpeg" alt="Zara">
  <img src="Home-page-images/brand icon 5.jpeg" alt="Puma">
  <img src="Home-page-images/brand icon 6.jpg" alt="Zara">
  <img src="Home-page-images/brand icon 7.jpg" alt="Puma">
</div>

<br><br><br><br>
<!-- New arrivals -->
<div class="container">
  <h2 class="animated-heading">Trending</h2>
</div>



<!-- Products -->
<div class="products-container">
  <div class="row product-row">
    <div class="popup-notification" id="popupNotification">
      <img src="website images/Women images/add to cart icon.gif" alt="Success" class="popup-icon">
      <h3 id="itemName"></h3>
      <p>is added to cart!</p>
  </div>
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
                  <i class="fas fa-shopping-cart"></i>
              </div>
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
                  <i class="fas fa-shopping-cart"></i>
              </div>
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
                  <i class="fas fa-shopping-cart"></i>
              </div>
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
                <i class="fas fa-shopping-cart"></i>
            </div>
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
              <i class="fas fa-shopping-cart"></i>
          </div>
      </div>
  </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-item">
            <div class="product-img-wrapper">
                <img src="website images/men'scollection/loungewear3.jpg"  alt="Product 1" class="product-img primary">
                <img src="website images/men'scollection/loungewear3.1.jpg" alt="Product 1 Hover" class="product-img secondary">
            </div>
            <div class="product-info">
                <h5>Green Cargo Sweat Short Tracksuit</h5>
                <p>6500 LKR</p>
            </div>
            <div class="add-to-cart">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>
      <div class="col-md-3 col-sm-6">
        <div class="product-item">
            <div class="product-img-wrapper">
                <img src="website images/men'scollection/tshirt3.2.jpg"  alt="Product 1" class="product-img primary">
                <img src="website images/men'scollection/tshirt3.1.jpg"   alt="Product 1 Hover" class="product-img secondary">
            </div>
            <div class="product-info">
                <h5>Green Colerless Printed T-shit</h5>
                <p>3999 LKR</p>
            </div>
            <div class="add-to-cart">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="product-item">
          <div class="product-img-wrapper">
              <img src="website images/men'scollection/tshirt6.2.jpg"  alt="Product 1" class="product-img primary">
              <img src="website images/men'scollection/tshirt6.1.jpg"  alt="Product 1 Hover" class="product-img secondary">
          </div>
          <div class="product-info">
              <h5>Jersy T-shirt</h5>
              <p>7499 LKR</p>
          </div>
          <div class="add-to-cart">
              <i class="fas fa-shopping-cart"></i>
          </div>
      </div>
  </div>
  </div>
 </div> 



 <br><br><br><br>

  <!-- FEEDBACK CARDS SLIDER -->
  <section class="feedback">
      <h2 class="feedback-category">What Our Customers Say</h2>
      <div class="feedback-container">
        <div class="feedback-card">
          <div class="feedback-image">
            <img src="Home-page-images/f1.jpg" alt="Feedback 1" class="feedback-thumb">
          </div>
          <div class="feedback-info">
            <p class="feedback-text">"I had an amazing experience with this product! The quality is top-notch, and the service was fantastic. I highly recommend it to everyone."</p>
            <h3 class="feedback-author">John Doe <span>Customer</span></h3>
          </div>
        </div>
        <div class="feedback-card">
          <div class="feedback-image">
            <img src="Home-page-images/f2.jpg" alt="Feedback 1" class="feedback-thumb">
          </div>
          <div class="feedback-info">
            <p class="feedback-text">"I had an amazing experience with this product! The quality is top-notch, and the service was fantastic. I highly recommend it to everyone."</p>
            <h3 class="feedback-author">John Doe <span>Customer</span></h3>
          </div>
        </div>
        <div class="feedback-card">
          <div class="feedback-image">
            <img src="Home-page-images/f3.jpg" alt="Feedback 1" class="feedback-thumb">
          </div>
          <div class="feedback-info">
            <p class="feedback-text">"I had an amazing experience with this product! The quality is top-notch, and the service was fantastic. I highly recommend it to everyone."</p>
            <h3 class="feedback-author">John Doe <span>Customer</span></h3>
          </div>
        </div>
        <div class="feedback-card">
          <div class="feedback-image">
            <img src="Home-page-images/f2.jpg" alt="Feedback 1" class="feedback-thumb">
          </div>
          <div class="feedback-info">
            <p class="feedback-text">"I had an amazing experience with this product! The quality is top-notch, and the service was fantastic. I highly recommend it to everyone."</p>
            <h3 class="feedback-author">John Doe <span>Customer</span></h3>
          </div>
        </div>
        <div class="feedback-card">
          <div class="feedback-image">
            <img src="Home-page-images/f2.jpg" alt="Feedback 1" class="feedback-thumb">
          </div>
          <div class="feedback-info">
            <p class="feedback-text">"I had an amazing experience with this product! The quality is top-notch, and the service was fantastic. I highly recommend it to everyone."</p>
            <h3 class="feedback-author">John Doe <span>Customer</span></h3>
          </div>
        </div>
      </div>
      <button class="pre-fdb-btn"><img src="Home-page-images/arrow.svg" alt="Previous"></button>
      <button class="nxt-fdb-btn"><img src="Home-page-images/arrow.svg" alt="Next"></button>
    </section>


    <br><br>
  <!-- Feature Section -->
  <div class="features">
    <div class="feature">
        <div class="icon">
            <i class="fa-solid fa-money-bill"></i>
        </div>
        <h3>Value for Money</h3>
        <p>Discover unbeatable value for your hard-earned money. We offer high-quality products at prices that won’t break the bank.</p>
    </div>
    <div class="feature">
        <div class="icon">
            <i class="fa-solid fa-hand-holding-dollar"></i>
        </div>
        <h3>Customer Satisfaction</h3>
        <p>We take immense pride in our track record of making all our customers happy. Your satisfaction is our success story.</p>
    </div>
    <div class="feature">
        <div class="icon">
            <i class="fa-solid fa-medal"></i>
        </div>
        <h3>Quality Products</h3>
        <p>When you need top-notch quality, trust our exceptional products to exceed your expectations every time. Quality matters, and we ensure it.</p>
    </div>
    <div class="feature">
        <div class="icon">
            <i class="fa-solid fa-truck"></i>
        </div>
        <h3>Quick Delivery</h3>
        <p>Need it ASAP? Count on our speedy delivery service to get your products to you in no time, because we know time matters.</p>
    </div>
  </div>


  <br>
  
  
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
                <li><a href="contact us.html">Contact Us</a></li>
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

    <script src="index.js"></script>
</body>
</html>




































































































































































































































































































































































































































































































































































































































































































































































































































































