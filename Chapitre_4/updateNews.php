<?php
/*
  Auteur : Guner, Adar, I.DA-P3B
  Projet : A Distribuer
  Description : Se connecter puis ajouter des news
  Version : 03.09.2018
 */

require_once './func.php';

if(isset($_GET['id'])){
    $idNews = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if($idNews == ''){
        header('Location: main.php');
        exit;
    }
}

if(isset($_POST['updateNews'])){
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $idNews = filter_input(INPUT_POST, 'idNews', FILTER_VALIDATE_INT);
    if ($title != '' and $description != '' and $idNews) {
        updateNews($idNews, $title, $description);
        header('Location: main.php');
        exit;
    }
}

$news = GetNews($idNews);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifier !</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
        <h1>Mise à jour d'une nouvelle</h1>
        <?php
        if (isset($errors['title'])) {
            echo "<h2>" . $errors['title'] . "</h2>";
        }
        echo "<br>";
        if (isset($errors['description'])) {
            echo "<h2>" . $errors['description'] . "</h2>";
        }
        ?>
        <form method='post' action="">
            <fieldset>
                <legend>Nouveau post</legend>
                <input type="hidden" name="idNews" value="<?= $news['idNews'] ?>"/>
                <div class="form-group">
                    <label for="titre">Titre: </label>
                    <br>
                    <input type="text" name="title" id="title" value="<?= isset($news) ? $news['Txt_title'] : '' ?>">
                    <br>
                    <label for="description">Description: </label>
                    <br>
                    <textarea rows="35" cols="260" name="description" id="description"><?= isset($news) ? $news['Txt_description'] : '' ?></textarea>
                </div>

                <input type="submit" name="updateNews" value="Modifier">
            </fieldset>
        </form>
        <nav>
            <a href="./main.php">Retour</a>
        </nav>
    </form>
</body>
</html>
