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

            <h2 class="mb-4">Dashboard</h2>

            <div class="row">

                <!-- Sofas -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 text-center">
                        <div class="card-body">
                            <h1>🛋️</h1>
                            <h4>Sofas</h4>
                            <a href="products.php?category=Sofas" class="btn btn-primary">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Curtains -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 text-center">
                        <div class="card-body">
                            <h1>🪟</h1>
                            <h4>Curtains</h4>
                            <a href="products.php?category=Curtains" class="btn btn-success">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blinds -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow h-100 text-center">
                        <div class="card-body">
                            <h1>🪟</h1>
                            <h4>Blinds</h4>
                            <a href="products.php?category=Blinds" class="btn btn-warning">
                                Manage
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<?php include("includes/footer.php"); ?>