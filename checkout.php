<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="Door/Logo.png" alt="Door T-Shirt Logo">
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#products">Products</a></li>
                <li><a href="checkout.php">CheckOut</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <link rel="stylesheet" type="text/css" href="app3.css">
</head>
<body>
    <h1>Checkout</h1>

    <?php
    include 'koneksi.php';

    // Retrieve all transactions from the database
    $query = "SELECT * FROM transactions";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Product Name</th><th>Size</th><th>Quantity</th><th>Total Price</th><th>Action</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $transactionId = $row['id'];
            $productName = $row['product_id'];
            $size = $row['size'];
            $quantity = $row['quantity'];
            $totalPrice = $row['total_price'];

            echo '<tr>';
            echo '<td>' . $productName . '</td>';
            echo '<td>' . $size . '</td>';
            echo '<td>' . $quantity . '</td>';
            echo '<td>' . $totalPrice . '</td>';
            echo '<td><a href="delete_transaction.php?id=' . $transactionId . '">Delete</a></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No transactions found.';
    }
    ?>

    <button onclick="window.location.href = 'index.php';">Back to Index</button>
    <button onclick="confirmCheckout()">Checkout</button>

    <script>
        function confirmCheckout() {
            if (confirm('Are you sure you want to proceed with the checkout?')) {
                window.location.href = 'checkout_process.php';
            }
        }
    </script>
</body>
</html>
