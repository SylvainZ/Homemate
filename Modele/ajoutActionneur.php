<?php

if(!empty($_POST['numero_de_serie']))
{
  include('connexionBD.php');
    
        $req = $bdd->prepare("INSERT INTO actionneurs(type,nom,Numserie,iduser,idpiece) VALUES(?,?,?,?,?)");
        $req->execute(array(
            $_POST['nom_du_capteur'],
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_SESSION['ID'],
            $_GET['ID']
        ));
    
 
    
    header('Location:index.php?cible=capteur&ID='.$_GET['ID']);

}   
    else
    {
    header('Location:index.php?cible=ajoutActionneur');
    }
?>