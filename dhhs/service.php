<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Services - Department of Health and Human Services</title>
    <?php include('./include/head.php'); ?>
    <style>
        #services {
            background: url('./assets/img/services-background.jpg') center center fixed;
            background-size: cover;
            /* color: #fff; */
            color: #000;
            text-align: center;
            padding: 100px 0;
        }

        #services h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        #services p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        #services a {
            display: inline-block;
            font-size: 16px;
            padding: 10px 20px;
            background-color: #007BFF;
            /* Deep Blue color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        #services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
            z-index: -1;
        }

        .service-card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .service-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #007BFF;
            /* Deep Blue color */
        }

        .service-card p {
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include('./include/navbar.php'); ?>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <p>Discover the comprehensive range of services offered by the Department of Health and Human Services to enhance community health and well-being.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Community Grants</h3>
                        <p>Apply for grants to support community health initiatives and projects. We believe in empowering local communities to make a positive impact on health outcomes.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Health Programs</h3>
                        <p>Explore our various health programs designed to improve overall well-being. From preventive care to specialized services, we are committed to promoting a healthier lifestyle for all.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Collaborative Partnerships</h3>
                        <p>Join us in building partnerships for a healthier community together. We work closely with organizations, businesses, and individuals to create a network that fosters health and well-being.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->

    <?php include('./include/footer.php'); ?>

    <!-- Bootstrap JS and Main JS Files -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <?php include('./include/tawkto.php'); ?>
</body>

</html>
