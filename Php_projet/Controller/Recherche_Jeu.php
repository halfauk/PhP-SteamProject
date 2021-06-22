<?php

// include db
include __DIR__ . '/../Database/Db.php';

// include model
include __DIR__ . '/../Modele/Accueil.php';


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT nom_jeu, categorie FROM jeux
      WHERE nom_jeu LIKE '%$recherche%'
      OR categorie LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['nom_jeu'].', '.$r['categorie'].' <br />';
     }
     

function page_not_found()
{
    header("HTTP/1.0 404 Not Found"); //On définit la page comme étant une page 404 au sein de l’entête
    include __DIR__ . '/../View/404.html'; // On ajoute la vue de la page 404
    die(); // arrête l’exécution du script
}
?>