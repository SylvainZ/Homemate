<?php

//appel de la BDD homemate
try{$bdd=new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
catch (Exception $e){ die('Erreur :'.$e->getMessage());}

//on include ce fichier dans toutes les pages où l'on a besoin de la BDD
?>