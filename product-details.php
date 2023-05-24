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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $productId = $_POST['product_id'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        // Calculate the total price
        $totalPrice = $quantity * $productPrice;

        // Check if there is enough stock
        if ($quantity <= $productStock) {
            // Reduce the stock
            $newStock = $productStock - $quantity;

            // Update the product stock in the database
            $updateQuery = "UPDATE products SET stock = $newStock WHERE id = $productId";
            $updateResult = mysqli_query($koneksi, $updateQuery);

            if ($updateResult) {
                // Insert the transaction data into the transactions table
                $insertQuery = "INSERT INTO transactions (product_id, size, quantity, total_price) VALUES ('$productId', '$size', '$quantity', '$totalPrice')";
                $insertResult = mysqli_query($koneksi, $insertQuery);

                if ($insertResult) {
                    // Transaction data inserted successfully
                    echo "<script>alert('Transaction completed successfully!'); window.location.href = 'index.php';</script>";
                } else {
                    // Error occurred while inserting transaction data
                    echo "Error: " . mysqli_error($koneksi);
                }
            } else {
                // Error occurred while updating the product stock
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            // Not enough stock
            echo "Insufficient stock. Please reduce the quantity.";
        }
    }
?>

<head>
    <title>Product Details</title>
    <link rel="stylesheet" type="text/css" href="app2.css">
</head>

<body>
<section id="product-details">
    <div class="product-image">
        <img src="data:image/jpg;base64,<?php echo base64_encode($productImage); ?>" alt="<?php echo $productName; ?>">
    </div>
    <div class="product-info">
        <h2><?php echo $productName; ?></h2>
        <p>Price: Rp.<?php echo $productPrice; ?></p>
        <p>Stock: <?php echo $productStock; ?></p>
        <p>Description: <?php echo $productDescription; ?></p>
        <!-- Display other product information as needed -->
    </div>
</section>

<section id="product-input">
    <h2>Buy</h2>
    <form method="post" action="">
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
        <input type="text" name="total_price" id="total_price" readonly>
        <button type="submit">Add To Cart</button>
        <button onclick="window.location.href = 'checkout.php';">CheckOut</button>
    </form>
    <button onclick="window.location.href = 'index.php';">Go Back</button>
</section>

    </section>

    <script src="app.js"></script>
    <script>
        var productPrice = <?php echo $productPrice; ?>;
        document.getElementById('total_price').setAttribute('data-product-price', productPrice);

        var quantityInput = document.getElementById('quantity');
        var totalPriceInput = document.getElementById('total_price');

        quantityInput.addEventListener('input', function() {
            var quantity = parseInt(quantityInput.value);
            var price = parseFloat(totalPriceInput.getAttribute('data-product-price'));
            var totalPrice = quantity * price;
            totalPriceInput.value = totalPrice.toFixed(0);
        });

        
    </script>
</body>

</html>
