<?php
session_start();
if (isset($_POST['username'])
    &&isset($_POST['password'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    $pass=sha1($_POST['password']);

    $requete = $bdd->prepare("SELECT Email,password FROM profil WHERE Email = ? AND password = ?");
    $requete->execute(array($_POST['username'], $pass));
    while ($donnees = $requete->fetch()){
        if (isset($donnees['Email'])&& isset($donnees['password'])) {
            echo "success";
            
        }
        else {
            echo "failed";
        }
    }
}
?>
