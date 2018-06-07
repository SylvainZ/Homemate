<?php

if(!empty($_POST['nom'])&&!empty($_POST['type'])&&!empty($_POST['superficie'])&&(isset($_GET['ID'])))
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
     
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    
    $req = $bdd->prepare("INSERT INTO piece(nom,type,superficie,ID_logement) VALUES(?,?,?,?)");
    $req->execute(array(
        $_POST['nom'],
        $_POST['type'],
        $_POST['superficie'],
        $_GET['ID']
        
    ));
    
    $ID=$_GET['ID'];

    header('Location: index.php?cible=piece&ID='.$ID);

}
else
    
    header('Location:index.php?cible=ajoutPiece');
?>