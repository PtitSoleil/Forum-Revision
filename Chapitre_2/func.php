<?php 

/*
  Auteur : Guner, Adar, I.DA-P2B
  Projet : Quiz !
  Fichier : Quiz !
  Description : Jeu de quiz avec plusieurs questions de différentes catégories
  Version : 06.06.2018
 */

//Entrees par l'utilisateur
$surnameR = filter_input(INPUT_POST, 'surnameR', FILTER_SANITIZE_STRING);
$nameR = filter_input(INPUT_POST, 'nameR', FILTER_SANITIZE_STRING);
$usernameR = filter_input(INPUT_POST, 'usernameR', FILTER_SANITIZE_STRING);
$pwdR = filter_input(INPUT_POST, 'pwdR', FILTER_SANITIZE_STRING);
$confirmPwdR = filter_input(INPUT_POST, 'confirmPwdR', FILTER_SANITIZE_STRING);

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