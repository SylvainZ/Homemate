<?php
if(!empty($_POST['numero_de_serie'])&&!empty($_POST['seuil']))
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
    }
    
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    $seuil = $_POST['seuil'];
    $numero_de_serie = $_POST['numero_de_serie'];
    $nom_du_capteur = $_POST['nom_du_capteur'];
    $type1 = explode('-',$_POST['nom_du_capteur']);
    $type = $type1[0];
    $piece = $_POST['piece'];
    $description= $_POST['description'];
    
    if ($type=='Temperature')
    {
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,piece,seuilT) VALUES(?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['piece'],
            $_POST['seuil']
        ));
    }
    
    elseif ($type=='Luminosite')
    {
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,piece,seuilL) VALUES(?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['piece'],
            $_POST['seuil']
        ));
    }
    
    elseif  ($type=='Presence')
    {
        
        $req = $bdd->prepare("INSERT INTO capteur(type,nom,NumSerie,Description,piece,seuilD) VALUES(?,?,?,?,?,?)");
        $req->execute(array(
            $type,
            $_POST['nom_du_capteur'],
            $_POST['numero_de_serie'],
            $_POST['description'],
            $_POST['piece'],
            $_POST['seuil']
        ));
    }
    
    header('Location:index.php?cible=capteurActionneursHabitations');

}   
    else
    {
    header('Location:index.php?cible=ajouterUnCapteur');
    }
?>