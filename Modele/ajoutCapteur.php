<?php
//vérifie si l'utilisateur a rempli tous les champs correctement
if(!empty($_POST['numero_de_serie'])&&!empty($_POST['seuil']))
{
    //appelle la BDD homemate
  include('connexionBD.php');
    
    $seuil = htmlspecialchars($_POST['seuil']);
    $numero_de_serie = htmlspecialchars($_POST['numero_de_serie']);
    $nom_du_capteur = htmlspecialchars($_POST['nom_du_capteur']);
    $type1 = explode('-',htmlspecialchars($_POST['nom_du_capteur']));
    $type = $type1[0];
    $description= htmlspecialchars($_POST['description']);

    //s'il s'agit d'un capteur de température
    if ($type=='Temperature')
    {
        //ajoute le capteur à la table
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,seuilT,iduser,idpiece) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            htmlspecialchars($_POST['nom_du_capteur']),
            htmlspecialchars($_POST['numero_de_serie']),
            htmlspecialchars($_POST['description']),
            htmlspecialchars($_POST['seuil']),
            $_SESSION['ID'],
            $_GET['ID']
        ));
    }

    //s'il s'agit d'un capteur de luminosité
    elseif ($type=='Luminosite')
    {
        //ajoute le capteur à la table
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,seuilL,iduser,idpiece) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            htmlspecialchars($_POST['nom_du_capteur']),
            htmlspecialchars($_POST['numero_de_serie']),
            htmlspecialchars($_POST['description']),
            htmlspecialchars($_POST['seuil']),
            $_SESSION['ID'],
            $_GET['ID']
        ));
    }

    //s'il s'agit d'un capteur de présence
    elseif  ($type=='Presence')
    {
        //ajoute le capteur à la table capteur
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,seuilD,iduser,idpiece) VALUES(?,?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            htmlspecialchars($_POST['nom_du_capteur']),
            htmlspecialchars($_POST['numero_de_serie']),
            htmlspecialchars($_POST['description']),
            htmlspecialchars($_POST['seuil']),
            $_SESSION['ID'],
            $_GET['ID']
        ));
    }

    //renvoie vers la page capteur
    header('Location:index.php?cible=capteur&ID='.$_GET['ID']);

}   
    else
    {
        //renvoie sur la page de saisie du formulaire
    header('Location:index.php?cible=ajouterUnCapteur');
    }
?>