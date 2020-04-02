<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>
            Cette page ne contient que du HTML.<br />
            Veuillez taper votre prénom :
        </p>
            
        <form action="cible.php" method="post">
            <p>
                <input type="text" name="prenom" /> <input type="submit" value="Valider" />
            </p>
            <br />
            <!--La liste déroulante-->
            <select name="choix">
                <option value="France">France</option>
                <option value="Espagne">Espagne</option>
                <option value="Italie">Italie</option>
                <option value="Royaume-Uni">Royaume-Uni</option>
                <option value="Canada">Canada</option>
                <option value="Chine">Chine</option>
                <option value="Japon">Japon</option>
            </select>

            <br />
            <!--Les grandes zones de texte-->
            <textarea name="message" rows="8" cols="45">
            Votre message ici.
            </textarea>
            <!--Les cases à cocher-->
            <br />
            <input type="checkbox" name="case" id="case" /> <label for="case">Sexe feminin</label>
            <input type="checkbox" name="case" id="case" /> <label for="case">Sexe Masculin</label>
            <input type="checkbox" name="case" id="case" /> <label for="case">Plus de 18 ans</label>

            <br />
            <!--Le formulaire d'envoi de fichier-->
            <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
                <p>
                    Formulaire d'envoi de fichier :<br />
                    <input type="file" name="monfichier" /><br />
                    <input type="submit" value="Envoyer le fichier" />
                </p>
            </form>
        </form>
    </body>
</html>