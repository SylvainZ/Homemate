<?php
if(!empty($_POST['nom'])&&!empty($_POST['type'])&&!empty($_POST['superficie']))
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
        $nom = $_POST['nom'];
        $type = $_POST['type'];
        $superficie = $_POST['superficie'];



        $req = $bdd->prepare("INSERT INTO piece(nom,type,superficie) VALUES(:nom,:type,:superficie)");
        $req->execute(array(
            'nom' => $_POST['nom'],
            'type' => $_POST['type'],
            'superficie' => $_POST['superficie'],
        ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    header('ajouterLogement.php');

}
else
    
    header('Location:../Vue/ajouterPiece.php');
?>