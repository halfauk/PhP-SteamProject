<?php
 // ~/php/tp1/public/cities.php
 //jeu=cities
 // include model
include __DIR__ . '/../database/db.php';

 include __DIR__ . '/../Modele/Accueil.php';
if(!key_exists('id', $_GET)) {
    page_not_found();
}

$id = $_GET['id'];
$Accueil = modelFetchAll($dbh);
$Jeu = $Jeu[$id];
 // include view
 include __DIR__ . '/../View/Jeu.php';

function page_not_found()
{
    header("HTTP/1.0 404 Not Found"); //On définit la page comme étant une page 404 au sein de l’entête
    include __DIR__ . '/../View/404.html'; // On ajoute la vue de la page 404
    die(); // arrête l’exécution du script
}