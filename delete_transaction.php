<?php
include 'koneksi.php';

$transactionId = $_GET['id']; // Get the transaction ID from the URL parameter

// Delete the transaction from the database
$query = "DELETE FROM transactions WHERE id = $transactionId";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Transaction deleted successfully
    header('Location: checkout.php');
    exit;
} else {
    // Error occurred while deleting the transaction
    echo "Error: " . mysqli_error($koneksi);
}
?>
