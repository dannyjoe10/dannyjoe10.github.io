<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us - DHHS</title>
    <?php include('./include/head.php'); ?>
    <style>
        /* Add your custom styles here */
        #contact {
            background: url('./assets/img/about.jpg') center center fixed;
            background-size: cover;
            color: #fff;
            padding: 80px 0;
        }

        #contact .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include('./include/navbar.php'); ?>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <p>If you have any questions or inquiries, feel free to reach out to us. We are here to assist you!</p>
                    </div>
                    <div class="info">
                        <div>
                            <i class="bi bi-geo-alt"></i>
                            <p>Your Address, City, Country</p>
                        </div>
                        <div>
                            <i class="bi bi-envelope"></i>
                            <p>info@example.com</p>
                        </div>
                        <div>
                            <i class="bi bi-phone"></i>
                            <p>+1 234 567 890</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="https://formspree.io/f/myyqazyo" method="POST" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <?php include('./include/footer.php'); ?>

    <!-- Bootstrap JS and Main JS Files -->
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <?php include('./include/tawkto.php'); ?>

</body>

</html>
