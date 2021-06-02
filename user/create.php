<!-- Require bootstrap -->
// user/create.php

<?php require '../bootstrap.php';
/** @var PDO $connection */

use Entity\User;
use Manager\UserManager;
use Repository\UserRepository;

$userRepository = new UserRepository($connection);

$user = new User();

// Si le formulaire a été soumis
if (isset($_POST['user_create'])) {  //attribut name du bouton submit
    // Met à jour le nouvel Utilisateur avec les données saisies par l'internaute

    $user
        ->setEmail($_POST['email'])
        ->setpassword($_POST['password'])
        ->setplainPassword($_POST['plainPassword']);

    // Insérer dans la base de données
    $manager = new UserManager($connection);
    $manager->insert($user);

    // Rediriger l'internaute
    header('Location: /user/read.php?id=' . $user->getId());
    http_response_code(302);
    exit;
}

?>
