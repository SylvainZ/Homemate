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

    $requete = $bdd->query('SELECT * FROM logement WHERE  = \''.$_GET['email'].'\'');
    $donnees = $requete->fetch();
$_SESSION['nom']=$donnees['Nom'];
$_SESSION['prenom']=$donnees['Prenom'];
$_SESSION['statut']=$donnees['Statut'];
$_SESSION['numAppartement']=$donnees['NumeroAppartement'];
$_SESSION['numEtage']=$donnees['NumeroEtage'];
$_SESSION['numRue']=$donnees['NumeroRue'];
$_SESSION['numBis']=$donnees['Bis'];
$_SESSION['nomRueBdAve']=$donnees['NomRueAveBd'];
$_SESSION['numDepartement']=$donnees['NumeroDepartement'];
$_SESSION['ville']=$donnees['Ville'];
$_SESSION['email']=$donnees['Email'];
$_SESSION['numTel']=$donnees['NumeroTelephone'];
$_SESSION['datedenaissance']=$donnees['Datedenaissance'];
$_SESSION['numLogement']=$donnees['NumeroLogement'];
$_SESSION['surface']=$donnees['surface'];
$_SESSION['codePostal']=$donnees['CodePostal'];
$_SESSION['numPiece']=$donnees['NumeroPi�ce'];
$_SESSION['ID']=$donnees['ID'];

    header('Location: index.php?cible=logement');
}
else{
    header('Location: index.php?cible=ajouterLogement');
}
?>