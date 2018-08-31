<?php
/*
  Auteur : Guner, Adar, I.DA-P3B
  Projet : A Distribuer
  Description : Se connecter puis ajouter des news
  Version : 30.08.2018
 */

require_once './func.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vous êtes connecté !</title>
    </head>
    <body>
        <?php
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=a-distribuer', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        try {
            foreach ($db->query('SELECT * FROM tbl_user WHERE idUser = "' . $_SESSION['idUser'] . '"') as $row) {
                echo "<h1>Bonjour " . $row['Txt_surname'] . " " . $row['Txt_name'] . ", voici votre fil d'actualité</h1>";
            }
        } catch (PDOException $ex) {
            echo 'An Error occured!'; // user friendly message
            error_log($ex->getMessage());
        }
        ?>
        <form method='post' action="">
            <fieldset>
                <legend>Nouveau post</legend>
                    <div class="form-group">
                        <label for="titre">Titre: </label>
                        <br>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="form-group">
                        <label for="description">Description: </label>
                        <br>
                        <textarea name="description" id="description"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" name="addNews" value="Insérer">
                    </fieldset>
                </form>
                <form method="post" action="logout.php"> 
                    <button type="submit" name="logout">Déconnexion</button>
                </form>
                </body>
                </html>
