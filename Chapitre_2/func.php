<?php 

/*
  Auteur : Guner, Adar, I.DA-P2B
  Projet : Quiz !
  Fichier : Quiz !
  Description : Jeu de quiz avec plusieurs questions de différentes catégories
  Version : 06.06.2018
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function isLogged() {
    return isset($_SESSION['connect']);
}

//Initialisation
$surnameR = filter_input(INPUT_POST, 'surnameR', FILTER_SANITIZE_STRING);
$nameR = filter_input(INPUT_POST, 'nameR', FILTER_SANITIZE_STRING);
$usernameR = filter_input(INPUT_POST, 'usernameR', FILTER_SANITIZE_STRING);
$pwdR = filter_input(INPUT_POST, 'pwdR', FILTER_SANITIZE_STRING);
$confirmPwdR = filter_input(INPUT_POST, 'confirmPwdR', FILTER_SANITIZE_STRING);


$usernameL = filter_input(INPUT_POST, "usernameL");
$pwdL = filter_input(INPUT_POST, "pwdL");

$msgError = "";
        
$errors = array();

function inscription($surnameR, $nameR, $usernameR, $pwdR) {
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=a-distribuer', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    try {
        $db->query('INSERT INTO tbl_user (Txt_surname,Txt_name,Txt_login,Txt_password) VALUES ("' . $surnameR . '","' . $nameR . '","' . $usernameR . '","' . $pwdR . '")');
        header("Location: index.php");
    } catch (PDOException $ex) {
        echo "An Error occured!"; // user friendly message
        error_log($ex->getMessage());
    }
}

if (filter_has_var(INPUT_POST, 'register')) {
    if (empty($surnameR)) {
        $errors["surnameR"] = "Le prénom n'est pas valide";
    }
    if (empty($nameR)) {
        $errors["nameR"] = "Le nom n'est pas valide";
    }
    if (empty($usernameR)) {
        $errors["usernameR"] = "L'identifiant n'est pas valide";
    }
    if ($pwdR != $confirmPwdR) {
        $errors["pwdR"] = "Le mot de passe n'est pas identique";
        $errors["confrimPwdR"] = "Le mot de passe n'est pas identique";
    }

    if (empty($errors)) {
        inscription($surnameR, $nameR, $usernameR, $pwdR);
    }
}

function connexion($usernameL, $pwdL) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=a-distribuer', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $requeteUser = $db->prepare("SELECT * FROM tbl_user WHERE Txt_login = ? and Txt_password = ?");
    $requeteUser->execute(array($usernameL, $pwdL));
    $utilisateurExist = $requeteUser->rowCount();
    if ($utilisateurExist == 1) {
        $_SESSION["connect"] = true;
        header("Location: confirmation.php");
    } else {
        $msgError = "Le pseudo ou le mot de passe est faux !";
    }
}

//Traitement
if ($usernameL && $pwdL) {
    connexion($usernameL, $pwdL);
}