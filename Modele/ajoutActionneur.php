<?php

//vérifie si l'utilisateur a entré un numéro de série non nul
if(!empty($_POST['numero_de_serie']))
{
    //appelle la BDD homemate
  include('connexionBD.php');

        //insère une nouvelle ligne dans la table actionneur avec les infos remplies par l'utilisateur
        $req = $bdd->prepare("INSERT INTO actionneurs(type,nom,Numserie,iduser,idpiece) VALUES(?,?,?,?,?)");
        $req->execute(array(
            htmlspecialchars($_POST['nom_du_capteur']),
            htmlspecialchars($_POST['nom_du_capteur']),
            htmlspecialchars($_POST['numero_de_serie']),
            $_SESSION['ID'],
            $_GET['ID']
        ));
    
 
    //renvoie sur la page capteur
    header('Location:index.php?cible=capteur&ID='.$_GET['ID']);

}   
    else
    {
        //renvoie sur la page de saisie du formulaire
    header('Location:index.php?cible=ajoutActionneur');
    }
?>