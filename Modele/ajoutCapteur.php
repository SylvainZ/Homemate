<?php

if(!empty($_POST['numero_de_serie'])&&!empty($_POST['seuil']))
{
  include('connexionBD.php');
    
    $seuil = $_POST['seuil'];
    $numero_de_serie = $_POST['numero_de_serie'];
    $nom_du_capteur = $_POST['nom_du_capteur'];
    $type1 = explode('-',$_POST['nom_du_capteur']);
    $type = $type1[0];
    $description= $_POST['description'];
    
    if ($type=='Temperature')
    {
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,seuilT,iduser,idpiece) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['seuil'],
            $_SESSION['ID'],
            $_GET['ID']
        ));
    }
    
    elseif ($type=='Luminosite')
    {
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,seuilL,iduser,idpiece) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['seuil'],
            $_SESSION['ID'],
            $_GET['ID']
        ));
    }
    
    elseif  ($type=='Presence')
    {
        
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,seuilD,iduser,idpiece) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
           
            $_POST['seuil'],
            $_SESSION['ID'],
            $_GET['ID']
        ));
    }
    
    header('Location:index.php?cible=capteur&ID='.$_GET['ID']);

}   
    else
    {
    header('Location:index.php?cible=ajouterUnCapteur');
    }
?>