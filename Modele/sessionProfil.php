<?php
session_start();
include('connexionBD.php');
$req = $bdd->query('SELECT * FROM profil WHERE Email = \''.$_GET['email'].'\''); /*.$_GET['email'].*/
$donnees = $req->fetch();
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
/*echo $_SESSION['age']=date('Y')-$donnees[YEAR('Datedenaissance')];

if ($donnees[MONTH('Datedenaissance')] > date('m')) {
    $_SESSION['age']=date('Y')-$donnees[YEAR('Datedenaissance')]-1;
}
elseif ($donnees[MONTH('Datedenaissance')] == date('m')){

    if ($donnees[DAY('Datedenaissance')] > date('d')) {
        $_SESSION['age']=date('Y')-$donnees[YEAR('Datedenaissance')]-1;
    }
    else{
        $_SESSION['age']=date('Y')-$donnees[YEAR('Datedenaissance')];
    }
}
else {
    $_SESSION['age']=date('Y')-$donnees[YEAR('Datedenaissance')];
}*/

$date_courante = new DateTime(date("Y-m-d"));
$date_naissance = new DateTime($_SESSION['datedenaissance']);
$interval = date_diff($date_courante,$date_naissance);


$_SESSION['age']=$interval->format('%Y');

header('Location:../index.php?cible=accueil');

?>