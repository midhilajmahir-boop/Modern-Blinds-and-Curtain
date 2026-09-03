<?php
include("db.php");
include("includes/header.php");

$category = "";

if(isset($_GET['category'])){
    $category = mysqli_real_escape_string($conn,$_GET['category']);
    $sql = "SELECT * FROM products WHERE category='$category'";
}else{
    $sql = "SELECT * FROM products";
}

$result = mysqli_query($conn,$sql);
?>

<div class="container py-5">

    <h1 class="text-center fw-bold mb-5">
        <?php
        if($category!=""){
            echo $category . " Collection";
        }else{
            echo "Our Products";
        }
        ?>
    </h1>

    <div class="row">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<div class="col-lg-4 col-md-6 mb-4">

    <div class="card border-0 shadow-lg rounded-4 h-100">

        <img src="assets/images/products/<?php echo $row['image']; ?>"
             class="card-img-top"
             style="height:300px;object-fit:cover;"
             alt="<?php echo $row['product_name']; ?>">

        <div class="card-body text-center">

            <h3 class="fw-bold">
                <?php echo $row['product_name']; ?>
            </h3>

            <p class="text-muted">
                <?php echo $row['description']; ?>
            </p>

            <div class="d-grid gap-2">

                <a href="https://wa.me/919495290093?text=Hello%20I%20am%20interested%20in%20<?php echo urlencode($row['product_name']); ?>"
                   target="_blank"
                   class="btn btn-success btn-lg">

                    WhatsApp

                </a>

                <a href="tel:+919495290093"
                   class="btn btn-dark btn-lg">

                    Call Now

                </a>

            </div>

        </div>

    </div>

</div>

<?php
}
?>

    </div>

</div>

<?php
include("includes/footer.php");
?>