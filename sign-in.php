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

    <title>SeaCloud - Sign in</title>
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
                <h2>Sign in</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Sign in</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Login Section ======= -->
    <section id="login" class="inner-page">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Sign in</h2>
            </div>

            <div class="p-5 rounded bg-light" style="max-width: 640px;margin:auto" data-aos="fade-up">
                <h1 class="h2 mb-3 text-center">Sea Cloud account</h1>
                <p class="lead border-bottom pb-3 mb-3 text-center">
                    Sign in to your account and start working with your servers.
                </p>

                <form method="post">
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="login-email" name="login-email" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="login-password" name="login-password" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Please enter your password.
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="_create" class="btn btn-primary btn-lg">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- End Login Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>

<!-- Scripts -->
<?php include PROJECT_ROOT . '/includes/scripts.php'; ?>

</body>

</html>
