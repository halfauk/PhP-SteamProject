<?php
class Database
{

    private $dbh;

    public function __construct(String $host, String $name, String $user, String $pass)
    {
        try{
            $this->dbh = new PDO("mysql:host=$host;dbname=$name", $user, $pass); // Initialisation de la connexion à la base de donnée 
        }
        catch(PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br>"; // Affichage du message d'erreur
            die(); // Arrêt du script
        } 
    }


    public function getConnection()
    {
        return $this->dbh;
    }
}