<?php
/*
  Auteur : Guner, Adar, I.DA-P3B
  Projet : A Distribuer
  Description : Se connecter puis ajouter des news
  Version : 03.09.2018
 */

require_once 'func.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
        <form method='post' action="">
            <fieldset>
                <legend>Connection</legend>
                <table class="tableauInscription">
                    <tr>
                        <td class="info">Identifiant:</td>
                        <td class="info"><input type="text" name="usernameL" value=""></td>
                    </tr>
                    <tr>
                        <td class="info">Mot de passe</td>
                        <td class="info"><input type="password" name="pwdL" value=""><br><br></td>
                    </tr>
                    <tr>
                        <td class="error"><?php
                            if (isset($msgError)) {
                                echo $msgError;
                            }
                            ?></td>
                    </tr>
                </table>
                <input type="submit" name="connexion" value="Connexion">
            </fieldset>
        </form>
        <nav>
            <a href="./register.php">Pas encore inscrit</a>
        </nav>
    </body>
</html>
