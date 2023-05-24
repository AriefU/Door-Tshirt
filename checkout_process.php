<?php
include 'koneksi.php';

$koneksi = mysqli_connect("localhost","root","","door");
 
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Delete all transactions from the database
$query = "DELETE FROM transactions";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Transactions deleted successfully
    echo "<script>alert('Thanks For Buying Our Product');</script>";
} else {
    // Error occurred while deleting transactions
    echo "<script>alert('Failed to delete transactions.');</script>";
}

// Close the database connection
mysqli_close($koneksi);

// Redirect to the index page
echo "<script>window.location.href = 'index.php';</script>";
?>
