<!-- ~/php/tp1/view/cities.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
            charset=utf-8" />
    </head>
    <title>Créer votre jeu</title>
    <body>
    <h1>Créer votre jeu</h1>
    
    <?php if($error) {
        echo "
           <p style='color: red'>
            An error has occured, please retry.
           </p>
        ";
    } ?>

    <form action="/handleCreate.php" method="POST">
        <p>
            <label>Nom du jeu</label>
            <input type="text" name="nom_jeu" value="<?php if (isset($jeux)) echo $jeux['nom_jeu']; ?>">
        </p>
        <p>
            <label>Nom de l'utilisateur</label>
            <input type="text" name="nom_utilisateur" value="<?php if (isset($jeux)) echo $jeux['nom_utilisateur']; ?>">
        </p>
        <p>
            <label>Catégorie du jeu</label>
            <select name="categorie" value="<?php if (isset($jeux)) echo $jeux['categorie']; ?>" multiple >
                <option value="RPG"> </option>
                <option value="vanilla"> </option>
                <option value="rogue-like"> </option>
                <option value="open-world"> </option>
                <option value="adventure"> </option>
            </select>
        </p>

        <button type="submit">Submit</button>
    </form>
    <p>
        <a href="/recherche.php">Rechercher un jeu par son nom </a>
    </p>

    </body>
</html>