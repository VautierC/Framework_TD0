<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Classement</title>
</head>
<?php
include("header.html");
include("fonctions_bdd.php");
?>
<body>
    <?php
        $bdd=creerConnection();
        $tabDonnees=executerRequete($bdd,'SELECT * FROM td0_noframework.classement join td0_noframework.joueur
                    where joueur.id=classement.idJoueur order by classement.rang');
        echo("<table style='margin:auto'>");
        echo("<tr><td>RANG</td><td>PRENOM</td><td>NOM</td><td>POINTS</td></tr>");
        foreach($tabDonnees as $i){
            echo("<tr>");
            echo("<td>$i[rang]</td></td><td>$i[prenom]</td><td>$i[nom]</td><td>$i[points]</td>");
            echo("</tr>");
        }
        echo("</table>");
    ?>
</body>
</html>