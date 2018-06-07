<?php
session_start();
if(!empty($_POST['numero_de_serie'])&&!empty($_POST['seuil']))
{
  include('connexionBD.php');
    
    $seuil = $_POST['seuil'];
    $numero_de_serie = $_POST['numero_de_serie'];
    $nom_du_capteur = $_POST['nom_du_capteur'];
    $type1 = explode('-',$_POST['nom_du_capteur']);
    $type = $type1[0];
    $piece = $_POST['piece'];
    $description= $_POST['description'];
    
    if ($type=='Temperature')
    {
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,piece,seuilT,iduser) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['piece'],
            $_POST['seuil'],
            $_SESSION['ID']
        ));
    }
    
    elseif ($type=='Luminosite')
    {
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,piece,seuilL,iduser) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['piece'],
            $_POST['seuil'],
            $_SESSION['ID']
        ));
    }
    
    elseif  ($type=='Presence')
    {
        
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,piece,seuilD,iduser) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['piece'],
            $_POST['seuil'],
            $_SESSION['ID']
        ));
    }
    
    header('Location:index.php?cible=capteurActionneursHabitations');

}   
    else
    {
    header('Location:index.php?cible=ajouterUnCapteur');
    }
?>