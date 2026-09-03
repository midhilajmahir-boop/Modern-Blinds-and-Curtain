<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db.php");

$message = "";

if (isset($_POST['add_product'])) {

    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    if ($image != "") {

        $image_name = time() . "_" . $image;

        move_uploaded_file(
            $tmp,
            "../uploads/products/" . $image_name
        );

        $sql = "INSERT INTO products(category,product_name,description,image)
                VALUES('$category','$product_name','$description','$image_name')";

        if (mysqli_query($conn, $sql)) {

            $message = "<div class='alert alert-success'>
                        Product Added Successfully.
                        </div>";

        } else {

            $message = "<div class='alert alert-danger'>
                        Failed to Add Product.
                        </div>";
        }

    } else {

        $message = "<div class='alert alert-warning'>
                    Please Select Product Image.
                    </div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Product</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h3>Add Product</h3>

</div>

<div class="card-body">

<?php echo $message; ?>

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">

<label class="form-label">
Category
</label>

<select
name="category"
class="form-control"
required>

<option value="">Select Category</option>

<option value="Curtains">Curtains</option>

<option value="Blinds">Blinds</option>

<option value="Sofas">Sofas</option>

</select>

</div>

<div class="mb-3">

<label class="form-label">

Product Name

</label>

<input
type="text"
name="product_name"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">

Description

</label>

<textarea
name="description"
class="form-control"
rows="5"
required></textarea>

</div>

<div class="mb-3">

<label class="form-label">

Product Image

</label>

<input
type="file"
name="image"
class="form-control"
accept="image/*"
required>

</div>

<button
type="submit"
name="add_product"
class="btn btn-success">

Add Product

</button>

<a
href="products.php"
class="btn btn-secondary">

View Products

</a>

<a
href="dashboard.php"
class="btn btn-dark">

Dashboard

</a>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>