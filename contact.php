<!-- Require bootstrap -->
<?php require 'bootstrap.php';

/** @var PDO $connection */

use Repository\DataCenterRepository;
use Repository\DistributionRepository;
use Repository\ServerRepository;
use Repository\UserRepository;

$datacenterRepository = new DataCenterRepository($connection);
$distributionRepository = new DistributionRepository($connection);
$serverRepository = new ServerRepository($connection);
$userRepository = new UserRepository($connection);

$repository = new ServerRepository($connection);

$servers = $repository->findAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include PROJECT_ROOT . '/includes/head.php'; ?>

    <title>SeaCloud - Contact</title>
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Top bar -->
        <?php include PROJECT_ROOT . '/includes/topbar.php'; ?>

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>SeaCloud</h3>
                        <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus.
                            Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc
                            congue.</p>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>info@example.com</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form method="post" role="form" class="contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                        curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                        laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                        pellentesque elit ullamcorper dignissim.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                        elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                        pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt
                        sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat
                        assumenda soluta sunt pariatur error doloribus fuga.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante
                        in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum
                        est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

        </div>
    </section><!-- End F.A.Q Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>

<!-- Scripts -->
<?php include PROJECT_ROOT . '/includes/scripts.php'; ?>

</body>

</html>
