<!-- ~/php/tp1/view/cities.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
            charset=utf-8" />
    </head>
    <title>Tout les jeux</title>
    <body>
    <h1>Tout les jeux </h1>
    <table>
        <?php foreach ($categorie as $jeu) : ?>
        <tr>
            <td><?= $jeu; ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
    </body>
</html>