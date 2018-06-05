<?php
if(!empty($_POST['type'])&&!empty($_POST['adresse'])&&!empty($_POST['ville'])&&!empty($_POST['piece'])&&!empty($_POST['postal'])&&!empty($_POST['superficie']))
{
    include('connexionBD.php');

    $req = $bdd->prepare("INSERT INTO logement(Type,Adresse,Superficie,Ville,NombrePiece,CodePostal,IdUser) VALUES(?,?,?,?,?,?,?)");
    $req->execute(array(
        $_POST['type'],
        $_POST['adresse'],
        $_POST['superficie'],
        $_POST['ville'],
        $_POST['piece'],
        $_POST['postal'],
        $_SESSION['ID']
    ));

    header('Location: index.php?cible=logement');

}
else{
    header('Location: index.php?cible=ajouterLogement');
}

?>