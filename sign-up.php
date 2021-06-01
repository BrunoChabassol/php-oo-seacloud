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

    <title>SeaCloud - Signup</title>
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
                <h2>Sign up</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Sign up</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Signup Section ======= -->
    <section id="signup" class="inner-page">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Sign up</h2>
            </div>

            <div class="p-5 rounded bg-light" style="max-width: 640px;margin:auto" data-aos="fade-up">
                <h1 class="h2 mb-3 text-center">Create your Sea Cloud account</h1>
                <p class="lead border-bottom pb-3 mb-3 text-center">
                    Create your account and start working with your servers.
                </p>

                <form>
                    <div class="mb-3">
                        <label for="signup-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signup-email" placeholder="name@example.com">
                    </div>

                    <div class="row mb-3">
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

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- End Signup Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include PROJECT_ROOT . '/includes/footer.php'; ?>

<!-- Scripts -->
<?php include PROJECT_ROOT . '/includes/scripts.php'; ?>

</body>

</html>