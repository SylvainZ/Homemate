<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT * FROM messagerie WHERE ID = '.$_GET['message']);
$donnees = $req->fetch()

?>