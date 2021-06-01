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

    <title>SeaCloud - Create server</title>
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
                <h2>My profil</h2>
                <ol>
                    <li><a href="/index.php">Home</a></li>
                    <li>My profil</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Dashboard Section ======= -->
    <section id="dashboard" class="inner-page">
        <div class="container">

            <div class="row gy-4">

                <div class="col-md-4 col-lg-3">
                    <div class="list-group pe-5">
                        <a href="/account_dashboard.php" class="list-group-item list-group-item-action">
                            Dashboard
                        </a>
                        <a href="/account_profil.php" class="list-group-item list-group-item-action">
                            My profil
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Logout
                        </a>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9">
                    <h2 class="mb-5">My profil</h2>

                    <form>
                        <div class="mb-4">
                            <label for="profil-email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="profil-email" placeholder="email@example.com" readonly>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <label for="signup-password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="signup-password" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Please enter your password.
                                </div>
                            </div>

                            <div class="col">
                                <label for="signup-confirmation" class="form-label">Confirmation</label>
                                <input type="password" class="form-control" id="signup-confirmation" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Please enter your password confirmation.
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
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
