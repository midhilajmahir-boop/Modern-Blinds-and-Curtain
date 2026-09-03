<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Modern Sofas, Blinds & Curtains</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
<style>

    .modern-navbar {
    background: #0b0f19 !important;
    border-bottom: 1px solid #263244;
    padding: 13px 0;
    position: sticky;
    top: 0;
    z-index: 9999;
}

/* Navbar links */
.modern-navbar .nav-link {
    color: #ffffff !important;
    font-size: 14px;
    font-weight: 500;
    padding: 10px 15px !important;
    transition: 0.3s;
}

.modern-navbar .nav-link:hover {
    color: #c59d5f !important;
}

/* Business name */
.modern-brand {
    color: #ffffff !important;
    text-decoration: none;
}

.modern-brand:hover {
    color: #c59d5f !important;
}

/* Logo */
.modern-logo {
    width: 55px;
    height: 55px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #c59d5f;
}

/* WhatsApp */
.navbar-whatsapp {
    background: #111827;
    border: 1px solid #c59d5f;
    color: #ffffff !important;
    border-radius: 25px;
    padding: 8px 17px !important;
    text-decoration: none;
}

.navbar-whatsapp:hover {
    background: #c59d5f;
    color: #0b0f19 !important;
}

/* Call */
.navbar-call {
    background: #c59d5f;
    border: 1px solid #c59d5f;
    color: #0b0f19 !important;
    border-radius: 25px;
    padding: 8px 18px !important;
    text-decoration: none;
}

.navbar-call:hover {
    background: transparent;
    color: #c59d5f !important;
}

/* Mobile menu */
.modern-navbar .navbar-toggler {
    border: 1px solid #c59d5f;
}

.modern-navbar .navbar-toggler:focus {
    box-shadow: none;
}

.modern-navbar .navbar-toggler-icon {
    filter: invert(1);
}
</style>

</head>


<body>


<!-- ==========================================
     NAVBAR
========================================== -->

<nav class="navbar navbar-expand-lg modern-navbar">

    <div class="container">


        <!-- LOGO + BUSINESS NAME -->

        <a href="index.php"
           class="modern-brand d-flex align-items-center">

            <img
                src="assets/images/logo/logo.jpeg"
                alt="Modern Sofas, Blinds & Curtains"
                class="modern-logo me-2">

            <span>
                Modern Sofas, Blinds & Curtains
            </span>

        </a>


        <!-- MOBILE MENU -->

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#modernNavbar"
            aria-controls="modernNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- NAVIGATION -->

        <div class="collapse navbar-collapse"
             id="modernNavbar">


            <ul class="navbar-nav ms-auto align-items-lg-center">


                <li class="nav-item">

                    <a class="nav-link"
                       href="index.php">

                        Home

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="products.php">

                        Products

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="about.php">

                        About

                    </a>

                </li>


            


                <li class="nav-item">

                    <a class="nav-link"
                       href="contact.php">

                        Contact

                    </a>

                </li>


                <!-- WHATSAPP -->

                <li class="nav-item ms-lg-3">

                    <a
                        href="https://wa.me/919495290093"
                        target="_blank"
                        class="navbar-whatsapp">

                        <i class="fab fa-whatsapp"></i>

                        WhatsApp

                    </a>

                </li>


                <!-- CALL -->

                <li class="nav-item ms-lg-2">

                    <a
                        href="tel:+919495290093"
                        class="navbar-call">

                        <i class="fas fa-phone"></i>

                        Call

                    </a>

                </li>


            </ul>

        </div>

    </div>

</nav>


<!-- ==========================================
     END NAVBAR
========================================== -->