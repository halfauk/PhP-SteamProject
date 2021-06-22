<!-- ~/php/tp1/View/categorie.php -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;
            charset=utf-8" />
    </head>
    <title>Toutes les categories</title>
    <body>
    <h1>Toutes les categories </h1>
    <table>
        <?php foreach ($categorie as $jeu) : ?>
        <tr>
            <td><?= $jeu; ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
    </body>
</html>