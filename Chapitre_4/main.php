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
        <style type="text/css">
            .error { color :red; }
        </style>
    </head>
    <body>
        <?php
        if (isset($errors['title'])) {
            echo "<h2>" . $errors['title'] . "</h2>";
        }
        echo "<br>";
        if (isset($errors['description'])) {
            echo "<h2>" . $errors['description'] . "</h2>";
        }

        $db = dbConnect();
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
                    <input type="text" name="title" id="title">
                    <br>
                    <label for="description">Description: </label>
                    <br>
                    <textarea rows="35" cols="260" name="description" id="description"></textarea>
                </div>

                <input type="submit" name="addNews" value="Insérer">
            </fieldset>
        </form>
        <form method="post" action="logout.php"> 
            <button type="submit" name="logout">Déconnexion</button>
        </form>
<?php echo showNews() ?>
    </body>
</html>
