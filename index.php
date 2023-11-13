<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to Department of Health and Human Services</title>
    <?php include('./include/head.php'); ?>
    <style>
        #hero {
            position: relative;
            background: url('./assets/img/hero-image.jpg') center center fixed;
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            /* Adjusted padding for smaller screens */
        }

        #hero .text-container {
            background-color: rgba(0, 0, 0, 0.7);
            /* Adjusted background opacity */
            padding: 20px;
            border-radius: 10px;
            margin-top: 5px;
            max-width: 80%;
            /* Added max-width for better responsiveness */
            margin-left: auto;
            /* Center text container */
            margin-right: auto;
            /* Center text container */
        }

        #hero h1 {
            font-size: 32px;
            /* Adjusted font size for smaller screens */
            margin-bottom: 20px;
        }

        #hero p {
            font-size: 16px;
            /* Adjusted font size for smaller screens */
            margin-bottom: 20px;
        }

        #hero a {
            display: inline-block;
            font-size: 14px;
            /* Adjusted font size for smaller screens */
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            z-index: -1;
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            #hero {
                padding: 80px 0;
                /* Adjusted padding for smaller screens */
            }

            #hero h1 {
                font-size: 28px;
                /* Adjusted font size for smaller screens */
            }

            #hero p {
                font-size: 14px;
                /* Adjusted font size for smaller screens */
            }

            #hero a {
                font-size: 12px;
                /* Adjusted font size for smaller screens */
            }
        }



        #features .feature {
            margin-bottom: 30px;
        }

        #features .feature i {
            font-size: 36px;
            margin-bottom: 10px;
            color: #007BFF;
            /* Deep Blue color */
        }

        #features .feature {
            margin-bottom: 30px;
        }

        #features .feature i {
            font-size: 36px;
            margin-bottom: 10px;
            color: #007BFF;
            /* Deep Blue color */
        }

        /* New style for cards */
        .feature-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
            height: 100%;
            /* Set a fixed height for the cards */
        }

        .feature-card:hover {
            transform: scale(1.05);
        }

        #contact {
            background: url('./assets/img/contact-background.jpg') center center fixed;
            background-size: cover;
            /* color: #fff; */
            color: #000;
            text-align: center;
            padding: 100px 0;
        }

        #contact h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        #contact p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        #contact a {
            display: inline-block;
            font-size: 16px;
            padding: 10px 20px;
            background-color: #007BFF;
            /* Deep Blue color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Add this style to your existing CSS */
        #about img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            /* Optional: Add rounded corners to the image */
            margin-bottom: 20px;
            /* Optional: Add some space between image and text */
        }



        #about {
            background-color: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }

        #about h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        #about p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        #about a {
            display: inline-block;
            font-size: 16px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include('./include/navbar.php'); ?>


    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="text-container">
                <h1>Welcome to the Department of Health and Human Services</h1>
                <p>Empowering communities for a healthier tomorrow.</p>
                <a href="register.php" class="btn btn-primary">Apply for Grants</a>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <!-- Features Section -->
    <section id="features" class="mt-2 mb-2">
        <div class="container">
            <h2>Key Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-check"></i>
                        <h3>Community Grants</h3>
                        <p>Apply for grants to support community health initiatives and projects.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-check"></i>
                        <h3>Health Programs</h3>
                        <p>Explore our various health programs designed to improve well-being.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-check"></i>
                        <h3>Collaborative Partnerships</h3>
                        <p>Join us in building partnerships for a healthier community together.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/about.jpg" alt="About Us Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>We are committed to promoting health and well-being in communities. Learn more about our mission and initiatives.</p>
                    <a href="about.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or inquiries, feel free to reach out to us. We are here to assist you!</p>
            <a href="contact.php" class="btn btn-primary">Contact Us</a>
        </div>
    </section><!-- End Contact Section -->

    <?php include('./include/footer.php'); ?>

    <!-- Bootstrap JS and Main JS Files -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <?php include('./include/tawkto.php'); ?>

</body>

</html>