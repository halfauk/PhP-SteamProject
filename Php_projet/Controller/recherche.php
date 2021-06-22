<?php
 // ~/php/tp1/public/cities.php

 // include db
include __DIR__ . '/../Database/Db.php';

$Database = new Database(
    host:"127.0.0.1",
    name:"Steam",
    user:"root",
    pass:"",
);
$conn = $Database->getConnection();

 // include model
include __DIR__ . '/../Modele/Accueil.php';
 
//$searchString = $_GET[':search'];
//$nom_jeu = modelSearchByName($dbh, $searchString);
//var_dump($_POST);
$recherche = isset($_POST['search']) ? $_POST['search'] : '%';

//if(!key_exists(':search', $_GET)) { // On vérfie si la référence est bien passée
//    page_not_found();
//}

$searchString = $_POST['search'];
$nom_jeu = modelSearchByName($conn, $searchString);



var_dump($nom_jeu);

//modelSearchByCategorie($dbh, $searchString);


include __DIR__ . '/../View/recherche_jeu.php';


function page_not_found()
{
    header("HTTP/1.0 404 Not Found"); //On définit la page comme étant une page 404 au sein de l’entête
    include __DIR__ . '/../View/404.html'; // On ajoute la vue de la page 404
    die(); // arrête l’exécution du script
}