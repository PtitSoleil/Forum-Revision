<?php
/*
  Auteur : Guner, Adar, I.DA-P3B
  Projet : A Distribuer
  Description : Se connecter puis ajouter des news
  Version : 03.09.2018
 */

session_start();
session_destroy();
header("Location:./index.php");
