<?php
if(!empty($_POST['type'])&&!empty($_POST['adresse'])&&!empty($_POST['ville'])&&!empty($_POST['piece'])&&!empty($_POST['CodePostal'])&&!empty($_POST['superficie']))
{
    include('connexionBD.php');

    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
    $type = $_POST['type'];
    $adresse = $_POST['adresse'];
    $superficie = $_POST['superficie'];
    $ville = $_POST['ville'];
    $piece = $_POST['piece'];
    $CodePostal = $_POST['CodePostal'];



    $req = $bdd->prepare("INSERT INTO logement(type,addresse,superficie,ville,piece,CodePostal,IdUser) VALUES(?,?,?,?,?,?,?)");
    $req->execute(array(
        $_POST['type'],
        $_POST['addresse'],
        $_POST['superficie'],
        $_POST['ville'],
        $_POST['piece'],
        $_POST['CodePostal'],
        $_SESSION['ID']
    ));

    header('Location: index.php?cible=logement');

}
else
    
    header('Location: index.php?cible=ajouterLogement');
?>