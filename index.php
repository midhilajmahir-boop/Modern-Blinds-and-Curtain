<?php
include("db.php");
include("includes/header.php");
?>

<style>

/* =====================================================
   GENERAL
===================================================== */

:root {
    --dark: #111827;
    --gold: #c59d5f;
    --light: #f8f7f4;
    --text: #555;
}

body {
    font-family: 'Poppins', sans-serif;
    color: var(--dark);
}

section {
    overflow: hidden;
}

.section-padding {
    padding: 100px 0;
}

.section-label {
    color: var(--gold);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
}

.section-title {
    font-size: 42px;
    font-weight: 700;
    line-height: 1.2;
}

.section-text {
    color: #6b7280;
    line-height: 1.8;
}


/* =====================================================
   HERO
===================================================== */

.hero {
    min-height: 680px;
    background:
        linear-gradient(
            90deg,
            rgba(17,24,39,0.95) 0%,
            rgba(17,24,39,0.78) 45%,
            rgba(17,24,39,0.15) 100%
        ),
        url("assets/images/products/sofas/sofas1.jpeg");

    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
}

.hero-content {
    max-width: 650px;
    color: white;
}

.hero-small {
    color: #e1bd7a;
    font-weight: 600;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-size: 14px;
}

.hero h1 {
    font-size: 64px;
    font-weight: 700;
    line-height: 1.1;
    margin-top: 20px;
}

.hero p {
    font-size: 18px;
    line-height: 1.8;
    color: #e5e7eb;
    margin-top: 25px;
}

.hero-buttons {
    margin-top: 35px;
}

.btn-gold {
    background: var(--gold);
    border: 2px solid var(--gold);
    color: white;
    padding: 13px 28px;
    border-radius: 50px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-gold:hover {
    background: transparent;
    color: white;
    border-color: white;
}

.btn-outline-light-custom {
    border: 2px solid white;
    color: white;
    padding: 13px 28px;
    border-radius: 50px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-outline-light-custom:hover {
    background: white;
    color: var(--dark);
}


/* =====================================================
   ABOUT
===================================================== */

.about-image-wrapper {
    position: relative;
}

.about-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
    border-radius: 25px;
}

.about-badge {
    position: absolute;
    bottom: 25px;
    right: 25px;
    background: white;
    padding: 20px 25px;
    border-radius: 15px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.15);
}

.about-badge h3 {
    margin: 0;
    color: var(--gold);
    font-weight: 700;
}

.about-badge p {
    margin: 0;
    color: #555;
}


/* =====================================================
   CATEGORIES
===================================================== */

.categories-section {
    background: var(--light);
}

.category-card {
    border: none;
    border-radius: 22px;
    overflow: hidden;
    background: white;
    height: 100%;
    transition: all 0.4s ease;
}

.category-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.15) !important;
}

.category-image-wrapper {
    position: relative;
    overflow: hidden;
}

.category-image {
    width: 100%;
    height: 340px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.category-card:hover .category-image {
    transform: scale(1.06);
}

.category-content {
    padding: 30px;
    text-align: center;
}

.category-content h3 {
    font-size: 26px;
    font-weight: 700;
}

.category-content p {
    color: #6b7280;
    line-height: 1.7;
}


/* =====================================================
   WHY CHOOSE US
===================================================== */

.why-card {
    border: none;
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    height: 100%;
    transition: 0.3s;
    background: white;
}

.why-card:hover {
    transform: translateY(-7px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.why-icon {
    width: 75px;
    height: 75px;
    margin: auto;
    border-radius: 50%;
    background: #f6efe4;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
}

.why-card h4 {
    margin-top: 20px;
    font-weight: 700;
}

.why-card p {
    color: #6b7280;
    line-height: 1.7;
}


/* =====================================================
   CTA
===================================================== */

.cta {
    background:
        linear-gradient(
            rgba(17,24,39,0.88),
            rgba(17,24,39,0.88)
        ),
        url("assets/images/products/curtains/curtains1.jpeg");

    background-size: cover;
    background-position: center;
    border-radius: 30px;
    padding: 90px 30px;
    text-align: center;
    color: white;
}

.cta h2 {
    font-size: 45px;
    font-weight: 700;
}

.cta p {
    color: #d1d5db;
    font-size: 18px;
}


/* =====================================================
   CONTACT
===================================================== */

.contact-card {
    border: none;
    border-radius: 22px;
    padding: 35px;
    height: 100%;
    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 25px;
}

.contact-icon {
    width: 45px;
    height: 45px;
    min-width: 45px;
    background: #f6efe4;
    color: var(--gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-wrapper {
    border-radius: 22px;
    overflow: hidden;
    height: 100%;
    min-height: 400px;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 992px) {

    .hero {
        min-height: 600px;
    }

    .hero h1 {
        font-size: 50px;
    }

}

@media (max-width: 768px) {

    .section-padding {
        padding: 70px 0;
    }

    .hero {
        min-height: 620px;
        background-position: center;
    }

    .hero h1 {
        font-size: 40px;
    }

    .hero p {
        font-size: 16px;
    }

    .section-title {
        font-size: 32px;
    }

    .about-image {
        height: 350px;
    }

    .category-image {
        height: 280px;
    }

    .cta {
        padding: 65px 20px;
    }

    .cta h2 {
        font-size: 32px;
    }

}

</style>


<!-- =====================================================
     HERO SECTION
===================================================== -->

<section class="hero">

    <div class="container">

        <div class="hero-content">

            <div class="hero-small">
                Premium Home Interiors
            </div>

            <h1>
                Comfort Meets
                Modern Elegance
            </h1>

            <p>
                Discover beautiful sofas, elegant curtains and
                modern blinds designed to transform your home
                into a stylish and comfortable space.
            </p>

            <div class="hero-buttons">

                <a href="products.php"
                   class="btn btn-gold me-2">

                    Explore Collection
                    <i class="fas fa-arrow-right ms-2"></i>

                </a>

                <a href="https://wa.me/919495290093"
                   target="_blank"
                   class="btn btn-outline-light-custom">

                    <i class="fab fa-whatsapp me-2"></i>
                    Chat With Us

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     ABOUT
===================================================== -->

<section class="section-padding">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <div class="about-image-wrapper">

                    <img
                        src="assets/images/products/curtains/curtains1.jpeg"
                        alt="Premium Curtains"
                        class="about-image">

                    <div class="about-badge">

                        <h3>5+</h3>

                        <p>Years of Experience</p>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="section-label">
                    About Us
                </div>

                <h2 class="section-title mt-3">
                    Beautiful Interiors
                    Made For You
                </h2>

                <p class="section-text mt-4">

                    At Modern Sofas, Blinds & Curtains, we believe
                    that every home deserves beautiful and
                    comfortable interiors.

                </p>

                <p class="section-text">

                    We offer carefully selected sofas, curtains and
                    blinds with modern designs, quality materials
                    and professional service.

                </p>


                <div class="row mt-4">

                    <div class="col-6">

                        <h2 class="fw-bold">
                            500+
                        </h2>

                        <p class="text-muted">
                            Happy Customers
                        </p>

                    </div>

                    <div class="col-6">

                        <h2 class="fw-bold">
                            100%
                        </h2>

                        <p class="text-muted">
                            Customer Satisfaction
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CATEGORIES
===================================================== -->

<section class="section-padding categories-section">

    <div class="container">

        <div class="text-center mb-5">

            <div class="section-label">
                Our Collection
            </div>

            <h2 class="section-title mt-3">
                Explore Our Products
            </h2>

            <p class="section-text mt-3">
                Discover premium products designed to enhance
                your home and workspace.
            </p>

        </div>


        <div class="row g-4">


            <!-- SOFAS -->

            <div class="col-lg-4 col-md-6">

                <div class="card category-card shadow-sm">

                    <div class="category-image-wrapper">

                        <img
                            src="assets/images/products/sofas/sofas1.jpeg"
                            alt="Modern Sofas"
                            class="category-image">

                    </div>

                    <div class="category-content">

                        <h3>
                            🛋️ Sofas
                        </h3>

                        <p>
                            Elegant and comfortable sofas
                            designed for modern living spaces.
                        </p>

                        <a href="products.php?category=Sofas"
                           class="btn btn-dark rounded-pill px-4">

                            Explore Sofas
                            <i class="fas fa-arrow-right ms-2"></i>

                        </a>

                    </div>

                </div>

            </div>


            <!-- CURTAINS -->

            <div class="col-lg-4 col-md-6">

                <div class="card category-card shadow-sm">

                    <div class="category-image-wrapper">

                        <img
                            src="assets/images/products/curtains/curtains1.jpeg"
                            alt="Modern Curtains"
                            class="category-image">

                    </div>

                    <div class="category-content">

                        <h3>
                            🪟 Curtains
                        </h3>

                        <p>
                            Premium curtains that bring elegance,
                            privacy and beauty to every room.
                        </p>

                        <a href="products.php?category=Curtains"
                           class="btn btn-dark rounded-pill px-4">

                            Explore Curtains
                            <i class="fas fa-arrow-right ms-2"></i>

                        </a>

                    </div>

                </div>

            </div>


            <!-- BLINDS -->

            <div class="col-lg-4 col-md-6">

                <div class="card category-card shadow-sm">

                    <div class="category-image-wrapper">

                        <img
                            src="assets/images/products/blinds/blinds1.jpeg"
                            alt="Modern Blinds"
                            class="category-image">

                    </div>

                    <div class="category-content">

                        <h3>
                            🪟 Blinds
                        </h3>

                        <p>
                            Modern window blinds for homes,
                            offices and commercial spaces.
                        </p>

                        <a href="products.php?category=Blinds"
                           class="btn btn-dark rounded-pill px-4">

                            Explore Blinds
                            <i class="fas fa-arrow-right ms-2"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     WHY CHOOSE US
===================================================== -->

<section class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <div class="section-label">
                Why Choose Us
            </div>

            <h2 class="section-title mt-3">
                Quality. Style. Service.
            </h2>

            <p class="section-text mt-3">
                Everything you need for beautiful interiors.
            </p>

        </div>


        <div class="row g-4">


            <div class="col-lg-3 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        ⭐
                    </div>

                    <h4>
                        Premium Quality
                    </h4>

                    <p>
                        Quality materials and excellent
                        finishing for long-lasting products.
                    </p>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        🎨
                    </div>

                    <h4>
                        Modern Designs
                    </h4>

                    <p>
                        Stylish designs carefully selected
                        for modern interiors.
                    </p>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        🔧
                    </div>

                    <h4>
                        Professional Service
                    </h4>

                    <p>
                        Professional installation and
                        reliable service.
                    </p>

                </div>

            </div>


            <div class="col-lg-3 col-md-6">

                <div class="why-card">

                    <div class="why-icon">
                        🤝
                    </div>

                    <h4>
                        Customer Care
                    </h4>

                    <p>
                        Friendly assistance from selection
                        to installation.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CTA
===================================================== -->

<section class="section-padding">

    <div class="container">

        <div class="cta">

            <div class="section-label">
                Let's Create Something Beautiful
            </div>

            <h2 class="mt-3">
                Give Your Home A Modern Look
            </h2>

            <p class="mt-3">
                Talk to us about sofas, curtains and blinds
                for your home or office.
            </p>

            <div class="mt-4">

                <a href="https://wa.me/919495290093"
                   target="_blank"
                   class="btn btn-success btn-lg rounded-pill px-5 me-2">

                    <i class="fab fa-whatsapp me-2"></i>
                    WhatsApp Us

                </a>

                <a href="tel:+919495290093"
                   class="btn btn-gold btn-lg rounded-pill px-5">

                    <i class="fas fa-phone me-2"></i>
                    Call Us

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CONTACT
===================================================== -->

<section class="section-padding bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <div class="section-label">
                Contact Us
            </div>

            <h2 class="section-title mt-3">
                Visit Our Store
            </h2>

            <p class="section-text mt-3">
                We would love to help you choose the perfect
                products for your space.
            </p>

        </div>


        <div class="row g-4">


            <!-- CONTACT DETAILS -->

            <div class="col-lg-6">

                <div class="contact-card bg-white">

                    <h3 class="fw-bold mb-4">
                        Modern Sofas, Blinds & Curtains
                    </h3>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div>

                            <strong>Phone</strong>

                            <p class="text-muted mb-0">
                                +91 9495290093
                            </p>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div>

                            <strong>Email</strong>

                            <p class="text-muted mb-0">
                                faizalalika@gmail.com
                            </p>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fas fa-location-dot"></i>
                        </div>

                        <div>

                            <strong>Location</strong>

                            <p class="text-muted mb-0">
                                Alathur, Kerala 678541, India
                            </p>

                        </div>

                    </div>


                    <div class="mt-4">

                        <a href="https://wa.me/919495290093"
                           target="_blank"
                           class="btn btn-success rounded-pill px-4 me-2">

                            <i class="fab fa-whatsapp me-2"></i>
                            WhatsApp

                        </a>


                        <a href="tel:+919495290093"
                           class="btn btn-dark rounded-pill px-4">

                            <i class="fas fa-phone me-2"></i>
                            Call Now

                        </a>

                    </div>

                </div>

            </div>


            <!-- MAP -->

            <div class="col-lg-6">

                <div class="map-wrapper shadow-sm">

                    <iframe
                        src="https://maps.google.com/maps?q=Modern%20Blinds%20Curtain%20Alathur%20Kerala%20678541&t=&z=16&ie=UTF8&iwloc=&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>


<?php
include("includes/footer.php");
?>