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
                <h2>Create server</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Create server</li>
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
                    <h2 class="mb-5">Create your new server</h2>

                    <form>
                        <div class="mb-4">
                            <label for="new-server-name" class="form-label">Server name</label>
                            <input type="email" class="form-control" id="new-server-name">
                            <div id="new-server-name-help" class="form-text">Leave blank for auto generation.</div>
                        </div>

                        <div class="mb-4">
                            <label for="new-server-datacenter" class="form-label">Datacenter</label>
                            <select class="form-select" id="new-server-datacenter">
                                <option selected>Choose your server location</option>
                                <option value="1">New York</option>
                                <option value="2">San Francisco</option>
                                <option value="3">Amsterdam</option>
                                <option value="4">Singapore</option>
                                <option value="5">London</option>
                                <option value="6">Frankfurt</option>
                                <option value="7">Toronto</option>
                                <option value="8">Bangalore</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="new-server-distribution" class="form-label">Distribution</label>
                            <select class="form-select" id="new-server-distribution">
                                <option selected>Choose your server distribution</option>
                                <option value="1">Ubuntu 20.04 (LTS) x64</option>
                                <option value="2">FreeBSD 12.2 x64</option>
                                <option value="3">Fedora 34 x64</option>
                                <option value="4">Debian 10 x64</option>
                                <option value="5">CentOS 8.3 x64</option>
                            </select>
                        </div>

                        <div class="mb-4 slider">
                            <span class="badge badge bg-primary float-end"><span>1</span> Intel CPU</span>
                            <label for="new-server-cpu" class="form-label">CPU</label>
                            <input type="range" class="form-range" min="1" max="16" value="1" id="new-server-cpu">
                        </div>

                        <div class="mb-4 slider">
                            <span class="badge badge bg-primary float-end"><span>1</span> GB RAM</span>
                            <label for="new-server-ram" class="form-label">RAM</label>
                            <input type="range" class="form-range" min="1" max="16"  value="1" id="new-server-ram">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Create</button>
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