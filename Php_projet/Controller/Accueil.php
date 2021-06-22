<?php
 // ~/php_projet/controller/Accueil.php

 // include db
 include __DIR__ . '/../Database/Db.php';
 // include model
 include __DIR__ . '/../Modele/Accueil.php';
$Database = new Database(
    host:"127.0.0.1",
    name:"Steam",
    user:"root",
    pass:"",
);
$conn = $Database->getConnection();
$jeux = modelFetchAll($conn);

// include view
 include __DIR__ . '/../View/Accueil.php';