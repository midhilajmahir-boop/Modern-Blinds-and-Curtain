<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db.php");

if (!isset($_GET['id'])) {
    header("Location: products.php");
    exit();
}

$id = intval($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");

if (mysqli_num_rows($result) == 0) {
    die("Product not found.");
}

$product = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $image = $product['image'];

    if (!empty($_FILES['image']['name'])) {

        $image = time() . "_" . basename($_FILES['image']['name']);

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../uploads/products/" . $image
        );
    }

    mysqli_query($conn, "
        UPDATE products SET
        category='$category',
        product_name='$product_name',
        description='$description',
        image='$image'
        WHERE id=$id
    ");

    header("Location: products.php?category=$category");
    exit();
}

include("includes/header.php");
include("includes/sidebar.php");
?>

<div class="container mt-4">

    <h2>Edit Product</h2>

    <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Category</label>

            <select name="category" class="form-control">

                <option value="Sofas"
                    <?php if($product['category']=="Sofas") echo "selected"; ?>>
                    Sofas
                </option>

                <option value="Curtains"
                    <?php if($product['category']=="Curtains") echo "selected"; ?>>
                    Curtains
                </option>

                <option value="Blinds"
                    <?php if($product['category']=="Blinds") echo "selected"; ?>>
                    Blinds
                </option>

            </select>
        </div>

        <div class="mb-3">

            <label>Product Name</label>

            <input
                type="text"
                name="product_name"
                class="form-control"
                value="<?php echo $product['product_name']; ?>"
                required>

        </div>

        <div class="mb-3">

            <label>Description</label>

            <textarea
                name="description"
                class="form-control"
                rows="4"
                required><?php echo $product['description']; ?></textarea>

        </div>

        <div class="mb-3">

            <label>Current Image</label><br>

            <img
                src="../uploads/products/<?php echo $product['image']; ?>"
                width="150"
                class="mb-2">

        </div>

        <div class="mb-3">

            <label>Change Image (Optional)</label>

            <input
                type="file"
                name="image"
                class="form-control">

        </div>

        <button
            type="submit"
            name="update"
            class="btn btn-success">

            Update Product

        </button>

        <a href="products.php?category=<?php echo $product['category']; ?>"
           class="btn btn-secondary">
            Cancel
        </a>

    </form>

</div>

<?php
include("includes/footer.php");
?>