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
                <li><a href="checkout.php">CheckOut</a></li>
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
            <?php
            $query = "SELECT * FROM products";
            $result = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $productId = $row['id'];
                $productName = $row['name'];
                $productPrice = $row['price'];
                $productImage = $row['image'];
            ?>
            <a href="product-details.php?id=<?php echo $productId; ?>">
                <div class="product-card-wrapper">
                    <div class="product-card">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($productImage); ?>" alt="<?php echo $productName; ?>">
                        <h3><?php echo $productName; ?></h3>
                        <p>Price: Rp.<?php echo $productPrice; ?></p>
                    </div>
                </div>
            </a>
            <?php
            }
            ?>
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
                      <li><a href="https://www.instagram.com/door.tshirt" target="_blank" class="instagram-logo"></a></li>
                      <li><a href="https://www.tiktok.com/@door.tshirt" target="_blank" class="tiktok-logo"></a></li>
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
