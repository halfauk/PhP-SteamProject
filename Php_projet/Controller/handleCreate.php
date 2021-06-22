<?php
 // ~/php/tp1/public/cities.php
// include db
include __DIR__ . '/../Database/Db.php';
// include model
include __DIR__ . '/../Modele/Accueil.php';
try { // on utilise un try catch pour renvoyer vers une erreur si la requête n'a pas fonctionné
    $Database = new Database(
        host:"127.0.0.1",
        name:"Steam",
        user:"root",
        pass:"",
    );
    $conn = $Database->getConnection(); 
    $jeux = [
        'nom_jeu' => $_POST['nom_jeu'],
        'nom_utilisateur' => $_POST['nom_utilisateur'],
        'categorie' => $_POST['categorie']
    ];
    var_dump($conn, $jeux);
    $result = ModelecreateJeu($conn, $jeux);
} catch (Exception $e) {
    var_dump($e);
    fail($jeux); // On renvoie la city acutelle au template
}

if(!$result) {
 fail($jeux); // On renvoie la city acutelle au template
}

$jeu = modelFetchAll($conn);
$flash = "Un nouveau jeu a était créer";

// include view
include __DIR__ . '/../View/Accueil.php';

function fail($jeux) {
    $error = true;
    include __DIR__ . '/../View/createJeu.php';
    die();
}