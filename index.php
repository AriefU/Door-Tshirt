<!DOCTYPE html>
<?php include 'koneksi.php'?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door T-Shirt And Digital Printing</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Door/Logo.png" alt="Door T-Shirt Logo">
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h1>Welcome to Door T-Shirt And Digital Printing</h1>
            <p>Explore our wide range of stylish and personalized t-shirts. Express yourself with custom designs!</p>
        </section>

        <section id="products">
            <h2>Our Products</h2>
            <p>Check out our amazing collection of t-shirts, available in various styles, sizes, and designs.</p>
            <div class="product-slider">
                <div class="slider-container">
                    <div class="product-card">
                        <img src="Door/bj1.jpg" alt="Product 1">
                        <h3>Product 1</h3>
                        <p>Description of Product 1</p>
                    </div>
                    <div class="product-card">
                        <img src="Door/bj2.jpg" alt="Product 2">
                        <h3>Product 2</h3>
                        <p>Description of Product 2</p>
                    </div>
                    <div class="product-card">
                        <img src="Door/bj3.jpg" alt="Product 3">
                        <h3>Product 3</h3>
                        <p>Description of Product 3</p>
                    </div>
                    <div class="product-card">
                        <img src="Door/bj4.jpg" alt="Product 3">
                        <h3>Product 4</h3>
                        <p>Description of Product 4</p>
                    </div>
                </div>
                <button class="prev-button">&larr;</button>
                <button class="next-button">&rarr;</button>
            </div>
        </section>
          
            
            <section id="contact" class = "contact-us">
                <h2>Contact Us</h2>
                
                <div class="contact-form">
                    <form>
                      <div class="form-group">
                        <div class="form-field">
                          <label for="name">Name:</label>
                          <input type="text" id="name" name="name" placeholder="Your name">
                        </div>
                        <div class="form-field">
                          <label for="email">Email:</label>
                          <input type="email" id="email" name="email" placeholder="Your email">
                        </div>
                        <div class="form-field">
                          <label for="phone">Phone Number:</label>
                          <input type="text" id="phone" name="phone" placeholder="Your phone number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" placeholder="Your message"></textarea>
                      </div>
                      <button type="submit">Send</button>
                    </form>
                  </div>
                  
                
                <div class="find-us">
                    <h3>Find Us</h3>
                    <ul>
                      <li><a href="https://www.instagram.com/door_tshirt" target="_blank" class="instagram-logo"></a></li>
                      <li><a href="https://www.tiktok.com/@door_tshirt" target="_blank" class="tiktok-logo"></a></li>
                      <li><a href="https://wa.me/+628116818470" target="_blank" class="whatsapp-logo"></a></li>
                    </ul>
                    <div id="map"></div>
                  </div>
                  
            </section>
            
        
        
        

        <!-- Add more sections as needed -->

    </main>

    <footer>
        <p>&copy; 2023 Door T-Shirt And Digital Printing. All rights reserved.</p>
    </footer>
    <script src="app.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATf5zQIo-DmUORJWVK2cTLVQge2RhfLys&callback=initMap" async defer></script>

</body>
</html>