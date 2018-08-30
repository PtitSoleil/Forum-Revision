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
            foreach ($db->query('SELECT * FROM tbl_user WHERE idUser = "'.$_SESSION['idUser'].'"') as $row) {
                echo "Bonjour ".$row['Txt_surname'] . " " . $row['Txt_name']. ", voici votre fil d'actualité";
            }
        } catch (PDOException $ex) {
            echo 'An Error occured!'; // user friendly message
            error_log($ex->getMessage());
        }
        ?>
        <form method='post' action="">
            <fieldset>
                
            </fieldset>
        </form>
    </body>
</html>
