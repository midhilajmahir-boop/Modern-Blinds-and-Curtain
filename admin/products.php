<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include("../db.php");
include("includes/header.php");
?>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 p-0">
            <?php include("includes/sidebar.php"); ?>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 p-4">

            <?php
            $category = "";

            if (isset($_GET['category']) && $_GET['category'] != "") {
                $category = mysqli_real_escape_string($conn, $_GET['category']);
                $sql = "SELECT * FROM products WHERE category='$category' ORDER BY id DESC";
            } else {
                $sql = "SELECT * FROM products ORDER BY id DESC";
            }

            $result = mysqli_query($conn, $sql);
            ?>

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h2>
                    <?php
                    if ($category != "") {
                        echo $category . " Products";
                    } else {
                        echo "All Products";
                    }
                    ?>
                </h2>

                <a href="add-product.php" class="btn btn-success">
                    + Add Product
                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td width="120">
                                <img src="../assets/images/products/<?php echo $row['image']; ?>"
                                     width="100"
                                     height="80"
                                     style="object-fit:cover;border-radius:8px;">
                            </td>

                            <td><?php echo $row['product_name']; ?></td>

                            <td><?php echo $row['category']; ?></td>

                            <td><?php echo $row['description']; ?></td>

                            <td>

                                <a href="edit-product.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-primary btn-sm">
                                    Edit
                                </a>

                                <a href="delete-product.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Delete this product?');">
                                    Delete
                                </a>

                            </td>

                        </tr>

                    <?php
                        }

                    } else {
                    ?>

                        <tr>
                            <td colspan="6" class="text-center">
                                No products found.
                            </td>
                        </tr>

                    <?php
                    }
                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>