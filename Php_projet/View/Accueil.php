<!-- ~/php/tp1/view/cities.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
            charset=utf-8" />
    </head>
    <title>Accueil</title>
    <body>
    <h1>Accueil</h1>

    <?php if($flash) {
        echo "
           <p style='color: green'>
            " . $flash . " 
           </p>
        ";
    } ?>
    
    <table>
        <?php foreach ($jeu as $jeuxId => $jeux) : ?>
        <tr>
            <td><a href="/Accueil.php?id=<?= $jeuxId; ?>"><?=
            $jeux['nom_jeu']; ?></a></td>
            <td><?= $jeux['categorie']; ?></td>
            <td>Utilisateur: <?= $jeux['nom_utilisateur']; ?></td> <!--added property life-->
        </tr>
        
        <?php endforeach; ?>

    </table>
    <p>
        <a href="/recherche.php">Chercher un jeu vidéo</a>
    </p>
    <p>
        <a href="/Recherche_Jeu.php">Cherche un jeu Vidéo v2</a>
    <p>
        <a href="/create.php">Créer un jeu vidéo</a>
    </p>
    <p>
        <a href="/categories.php">Catégories</a>
    </p>

    </body>
</html>