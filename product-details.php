<!DOCTYPE html>
<html>
<?php
    include 'koneksi.php';
    $productId = $_GET['id']; // Get the product ID from the URL parameter

    // Retrieve the product details from the database based on the product ID
    $query = "SELECT * FROM products WHERE id = $productId";
    $result = mysqli_query($koneksi, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $productName = $row['name'];
        $productDescription = $row['description'];
        $productImage = $row['image'];
        $productPrice = $row['price'];
        $productStock = $row['stock'];
        // Retrieve other product information as needed
    } else {
        // Handle case when the product is not found
        echo "Product not found";
        exit;
    }
?>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
    <section id="product-details">
        <div class="product-image">
            <img src="data:image/jpg;base64,<?php echo base64_encode($productImage); ?>" alt="<?php echo $productName; ?>">
        </div>
        <div class="product-info">
            <h2><?php echo $productName; ?></h2>
            <p>Description: <?php echo $productDescription; ?></p>
            <p>Price: Rp.<?php echo $productPrice; ?></p>
            <p>Stock: <?php echo $productStock; ?></p>
            <!-- Display other product information as needed -->
        </div>
        <h2>Product Input</h2>
        <form method="post" action="product-input.php">
            <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
            <label for="size">Size:</label>
            <select name="size" id="size" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <!-- Add more size options as needed -->
            </select>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
            <label for="total_price">Total Price:</label>
            <span id="total_price_display">0</span>
            <button type="submit">Add To Cart</button>
        </form>
    </section>
    <script src="script.js"></script>
    <script>
        // Pass the product price to JavaScript
        var productPrice = <?php echo $productPrice; ?>;
        document.getElementById('quantity').addEventListener('input', function() {
            var quantity = parseInt(this.value);
            var totalPrice = (productPrice * quantity);
            document.getElementById('total_price_display').textContent = totalPrice.toFixed(0);
        });
    </script>
</body>
</html>
