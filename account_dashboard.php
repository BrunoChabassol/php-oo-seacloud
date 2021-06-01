<!-- Require bootstrap -->
<?php require 'bootstrap.php';

/** @var PDO $connection */

//use Repository\DataCenterRepository;
//use Repository\DistributionRepository;
//use Repository\ServerRepository;
//use Repository\UserRepository;

//$datacenterRepository = new DataCenterRepository($connection);
//$distributionRepository = new DistributionRepository($connection);
//$serverRepository = new ServerRepository($connection);
//$userRepository = new UserRepository($connection);

//$repository = new ServerRepository($connection);

//$servers = $repository->findAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include PROJECT_ROOT . '/includes/head.php'; ?>

    <title>SeaCloud - Dashboard</title>
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
                <h2>Dashboard</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Dashboard</li>
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
                        <a href="account_dashboard.php" class="list-group-item list-group-item-action">
                            Dashboard
                        </a>
                        <a href="account_profil.php" class="list-group-item list-group-item-action">
                            My profil
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            Logout
                        </a>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9">
                    <a href="account_new-server.php" class="btn btn-primary float-end">
                        New server
                    </a>

                    <h2 class="mb-3">Servers</h2>

                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h4 class="mb-3">SC-NY-Ubuntu-01</h4>
                                    <p>
                                        <strong>IP</strong>
                                        <span class="text-muted">255.255.255.255</span>
                                    </p>
                                    <p>
                                        <strong>Status</strong>
                                        <span class="badge bg-success">Ready</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 border-start">
                                <div class="card-body">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-5">Datacenter</dt>
                                        <dd class="col-sm-7">New York</dd>

                                        <dt class="col-sm-5">Distribution</dt>
                                        <dd class="col-sm-7">Ubuntu 20.04 (LTS) x64</dd>

                                        <dt class="col-sm-5">CPU</dt>
                                        <dd class="col-sm-7">2 Intel CPUs</dd>

                                        <dt class="col-sm-5">RAM</dt>
                                        <dd class="col-sm-7">4 GB</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-md-3 border-start">
                                <div class="card-body">
                                    <a class="btn btn-primary mb-3" href="#">
                                        Restart
                                    </a>
                                    <br>
                                    <a class="btn btn-light" href="#">
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h4 class="mb-3">SC-AM-Debian-01</h4>
                                    <p>
                                        <strong>IP</strong>
                                        <span class="text-muted">128.128.128.128</span>
                                    </p>
                                    <p>
                                        <strong>Status</strong>
                                        <span class="badge bg-warning">Pending</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 border-start">
                                <div class="card-body">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-5">Datacenter</dt>
                                        <dd class="col-sm-7">Amsterdam</dd>

                                        <dt class="col-sm-5">Distribution</dt>
                                        <dd class="col-sm-7">Debian 10 x64</dd>

                                        <dt class="col-sm-5">CPU</dt>
                                        <dd class="col-sm-7">1 Intel CPU</dd>

                                        <dt class="col-sm-5">RAM</dt>
                                        <dd class="col-sm-7">2 GB</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="col-md-3 border-start">
                                <div class="card-body">
                                    <a class="btn btn-primary mb-3" href="#">
                                        Restart
                                    </a>
                                    <br>
                                    <a class="btn btn-light" href="#">
                                        Reset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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