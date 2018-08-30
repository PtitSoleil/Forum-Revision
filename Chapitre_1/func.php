<?php
/*
  Auteur : Guner, Adar, I.DA-P3B
  Projet : A Distribuer
  Description : Se connecter puis ajouter des news
  Version : 30.08.2018
 */

session_start();

$errors = array();

$_SESSION['usernameL'] = filter_input(INPUT_POST, 'usernameL', FILTER_SANITIZE_STRING);
$_SESSION['pwdL']= filter_input(INPUT_POST, 'pwdL', FILTER_SANITIZE_STRING);

$_SESSION['surnameR'] = filter_input(INPUT_POST, 'surnameR', FILTER_SANITIZE_STRING);
$_SESSION['nameR'] = filter_input(INPUT_POST, 'nameR', FILTER_SANITIZE_STRING);
$_SESSION['usernameR'] = filter_input(INPUT_POST, 'usernameR', FILTER_SANITIZE_STRING);
$_SESSION['pwdR'] = filter_input(INPUT_POST, 'pwdR', FILTER_SANITIZE_STRING);
$_SESSION['pwdR'] = filter_input(INPUT_POST, 'pwdR', FILTER_SANITIZE_STRING);

if (filter_has_var(INPUT_POST, 'login')) {
        if (empty($_SESSION['usernameL'])) {
        $errors['usernameL'] = "Le pseudo est vide";
    }
        if (empty($_SESSION['pwdL'])) {
        $errors['pwdL'] = "Le mot de passe est vide";
    }
        if (count($errors) == 0) {
        //include "formulaire.php";
        header("Location: ./confirmation.php");
    }
}

if (filter_has_var(INPUT_POST, 'register')) {
    if (empty($_SESSION['surnameR'])) {
        $errors["pseudo"] = "Le pseudo n'est pas valide";
    }
    if (empty($password)) {
        $errors["password"] = "Le mot de passe n'est pas valide";
    }

    if (empty($errors)) {
        inscription($pseudo, $password);
    }
}