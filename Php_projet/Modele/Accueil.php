<?php
 // ~/php/tp1/model/cities.php
function modelSearchByName($dbh, $searchString) {
    $query = $dbh->prepare('SELECT  s.nom_jeu, s.nom_utilisateur, s.categorie FROM jeux s WHERE s.nom_jeu like :search ORDER BY s.nom_jeu'); // Création de la requête + utilisation order by pour ne pas utiliser sort
    $query->execute([':search' => '%' . $searchString .  '%']); // Exécution de la requête
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}
// On utilise use pour ajouter $dbh à notre fonction
function modelFetchAll($dbh) { // Transformation en function pour une création de requête et utilisation plus facile et explicite
    // On passe $dbh en paramètre pour que la fonction ai accès à la connexion sql
    $query = $dbh->prepare('SELECT  s.nom_jeu, s.nom_utilisateur, s.categorie FROM jeux s ORDER BY s.nom_jeu'); // Création de la requête + utilisation order by pour ne pas utiliser sort
    $query->execute(); // Exécution de la requête
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}

function modelSearchByCategorie($dbh, $searchString) {
    $query = $dbh->prepare('SELECT s.nom_jeu FROM jeux s WHERE s.nom_jeu like search');
    $query->execute(['search' => '%' . $searchString . '%']);
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}


function ModelecreateJeu($dbh, $jeux) {
        $query = $dbh->prepare('INSERT INTO jeux (nom_jeu, nom_utilisateur, categorie) VALUES (:nom_jeu, :nom_utilisateur, :categorie )'); // Création de la requête + utilisation order by pour ne pas utiliser sort
        return $query->execute([
            ':nom_jeu' => $jeux['nom_jeu'],
            ':nom_utilisateur'=> $jeux['nom_utilisateur'],
            ':categorie'=> $jeux['categorie']
        ]);
     // Exécution de la requête
}
