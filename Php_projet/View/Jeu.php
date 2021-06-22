<!-- ~/php/tp1/view/city.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
            charset=utf-8" />
    </head>
    <title>Un jeu</title>
    <body>
    <h1>Jeu <?= $city['nom_jeu'] ?></h1>
        <p>
            Nom du jeu: <?= $city['nom_jeu']; ?>
        </p>
        <p>
            Nom de l'utilisateur: <?= $city['nom_utilisateur']; ?>
        </p>
        <p>
            Catégorie du jeu: <?= $city['categorie']; ?>
        </p>

        <a href="/Accueil.php">
            Retour à la liste des jeux
        </a>
    </body>
</html>