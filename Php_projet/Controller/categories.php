<?php
 // ~/php/tp1/public/Accueil.php
 // include model
include __DIR__ . '/../Database/Db.php';

$Database = new Database(
    host:"127.0.0.1",
    name:"Steam",
    user:"root",
    pass:"",
);
$conn = $Database->getConnection();

include __DIR__ . '/../Modele/Accueil.php';

 $jeux = modelFetchAll($conn);

 $categorie = []; // Will be used to contain all our categorie
 foreach($jeux as $jeu) {
     if(!in_array($jeu['categorie'], $categorie)) { // Check if categorie does not already exists in array
         array_push($categorie, $jeu['categorie']);
     }
 }
var_dump($categorie);
 // include view
 include __DIR__ . '/../View/categorie.php';
