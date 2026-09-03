<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db.php");

if (isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    // Get image name
    $result = mysqli_query($conn, "SELECT image FROM products WHERE id=$id");

    if ($row = mysqli_fetch_assoc($result)) {

        if (!empty($row['image'])) {

            $imagePath = "../uploads/products/" . $row['image'];

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    // Delete product from database
    mysqli_query($conn, "DELETE FROM products WHERE id=$id");
}

// Go back to products page
header("Location: products.php");
exit();
?>