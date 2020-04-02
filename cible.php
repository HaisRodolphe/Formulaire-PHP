<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Bonjour <?php echo htmlspecialchars ($_POST['prenom']); ?></p><!--htmlspecialchars protection ecriture code html-->
        <p>Dans quel pays habité vous :<?php echo htmlspecialchars ($_POST['choix']); ?></p>
        <p>Message:<?php echo htmlspecialchars ($_POST['message']); ?></p>
        <!-- case à caucher-->
        <?php
        if (isset($_POST['Sexe Feminin']))
        {
            echo '<p>Vous êtes une femme</p>';
        }
        if (isset($_POST['Sexe Masculin']))
        {
            echo '<p>Vous êtes un homme</p>';
        }
        if (isset($_POST['Plus de 18 ans']))
        {
            echo '<p>Vous êtes majeur.</p>';
        }
        else {
            echo '<p>Vous n\'avez pas à étre ICI.</p>';
        }   
        
        ?>
    </body>
</html>