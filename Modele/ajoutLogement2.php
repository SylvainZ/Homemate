<?php
if(!empty($_POST['type'])&&!empty($_POST['adresse'])&&!empty($_POST['ville'])&&!empty($_POST['piece'])&&!empty($_POST['CodePostal'])&&!empty($_POST['superficie']))
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
        $type = $_POST['type'];
        $adresse = $_POST['adresse'];
        $superficie = $_POST['superficie'];
        $ville = $_POST['ville'];
        $piece = $_POST['piece'];
        $CodePostal = $_POST['CodePostal'];



        $req = $bdd->prepare("INSERT INTO logement(type,addresse,superficie,ville,piece,CodePostal) VALUES(:type,:addresse,:superficie,:ville,:piece,:CodePostal)");
        $req->execute(array(
            'type' => $_POST['type'],
            'addresse' => $_POST['addresse'],
            'superficie' => $_POST['superficie'],
            'ville' => $_POST['ville'],
            'piece' => $_POST['piece'],
            'CodePostal' => $_POST['CodePostal'],
        ));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    header('ajouterPiece.php');

}
else
    
    header('ajouterLogement.php');
?>