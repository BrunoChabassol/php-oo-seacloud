!-- Require bootstrap -->
// server/create.php

<?php require '../bootstrap.php';
/** @var PDO $connection */

use Entity\Server;
use Manager\ServerManager;
use Repository\ServerRepository;

$serverRepository = new ServerRepository($connection);

$server = new Server();

// Si le formulaire a été soumis
if (isset($_POST['server_create'])) {  //attribut name du bouton submit
    // Met à jour le nouvel Serveur avec les données saisies par l'internaute

    $server
        ->setlocation($_POST['location'])
        ->setdistribution($_POST['distribution'])
        ->setName($_POST['name'])
        ->setState($_POST['state'])
        ->setCpu($_POST['cpu'])
        ->setRam($_POST['ram']);

    // Insérer dans la base de données
    $manager = new ServerManager($connection);
    $manager->insert($server);

    // Rediriger l'internaute
    header('Location: /server/read.php?id=' . $server->getId());
    http_response_code(302);
    exit;
}

?>
