<html>
     <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="search">
     <input type="SUBMIT" value="search!"> 
     </form>
     <body>
     <!-- <input type="text" name="nom_jeu" value="<//?php if (isset($jeux)) echo $jeux['nom_jeu']; ?>"> -->

     <table>
        <?php foreach ($nom_jeu as $jeu) : ?>
        <tr>
            <td><?php echo $jeu['nom_jeu']; ?></td>
            <td><?php echo $jeu['nom_utilisateur']; ?></td>
            <td><?php echo $jeu['categorie']; ?></td>

        </tr>
        
        <?php endforeach; ?>
        </table> 

    
     </body>


</html>