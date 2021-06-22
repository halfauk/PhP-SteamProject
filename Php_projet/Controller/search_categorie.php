<?php
 // ~/php/tp1/public/cities.php
 // include model
include __DIR__ . '/../Database/Db.php';

 include __DIR__ . '/../Modele/Accueil.php';
 if(!key_exists('nom_jeu', $_GET)) {
    page_not_found();
 }
 $categorie = $_GET['nom_jeu'];

$jeux = modelFetchAll($dbh);

 if(!do_categorie_exists($categorie, $jeux)) {
    page_not_found();
 }

 $ToutesLesCategories = []; // Will be used to contain all our countries
 foreach($jeux as $jeu) {
     if( $jeu['categorie'] === $categorie ) { // Check if country does not already exists in array
         array_push($ToutesLesCategories, $jeu);
     }
 }

 // include view
 include __DIR__ . '/../View/categorie.php';

 function page_not_found()
{
    header("HTTP/1.0 404 Not Found"); //On définit la page comme étant une page 404 au sein de l’entête
    include __DIR__ . '/../View/404.html'; // On ajoute la vue de la page 404
    die(); // arrête l’exécution du script
}

/**
 * Check whenever country exists in the array
 */
function do_categories_exists($nom_jeu, $jeux) {
    $result = false; // initialize result to false ==> Should stay that way if no country found
    foreach($jeux as $jeu) {
        if( $jeu['categorie'] === $nom_jeu ) { // Check if country does not already exists in array
            $result = true;
        }
    }

    return $result;
}