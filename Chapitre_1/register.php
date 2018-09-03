<?php
/*
  Auteur : Guner, Adar, I.DA-P3B
  Projet : A Distribuer
  Description : Se connecter puis ajouter des news
  Version : 30.08.2018
 */

require_once 'func.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method='post' action="">
            <fieldset>
                <legend>Connection</legend>
                <table class="tableauInscription">
                    <tr>
                        <td class="info">Prenom:</td>
                        <td class="info"><input type="text" name="surnameR" value=""></td>
                        <td class="error"><?php if (isset($errors['usernameL'])) { echo $errors['usernameL']; } ?></td>
                    </tr>
                    <tr>
                        <td class="info">Nom:</td>
                        <td class="info"><input type="text" name="nameR" value=""></td>
                        <td class="error"><?php if (isset($errors['pwdL'])) { echo $errors['pwdL']; } ?></td>
                    </tr>
                    <tr>
                        <td class="info">Identifiant:</td>
                        <td class="info"><input type="text" name="usernameR" value=""></td>
                            <td class="error"><?php if (isset($errors['pwdL'])) { echo $errors['pwdL']; } ?></td>
                    </tr>
                    <tr>
                        <td class="info">Mot de passe:</td>
                        <td class="info"><input type="password" name="pwdR" value=""></td>
                        <td class="error"><?php if (isset($errors['pwdL'])) { echo $errors['pwdL']; } ?></td>
                    </tr>
                    <tr>
                        <td class="info">Validation du mot de passe:</td>
                        <td class="info"><input type="password" name="confirmPwdR" value=""></td>
                        <td class="error"><?php if (isset($errors['pwdL'])) { echo $errors['pwdL']; } ?></td>
                    </tr>
                </table>
                <input type="submit" name="register" value="Connexion">
            </fieldset>
        </form>
        <nav>
            <a href="./index.php">Retour sur connection</a>
        </nav>
    </body>
</html>
