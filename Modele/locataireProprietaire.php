<?php
session_start();
    
if(!empty($_POST['dateDeNaissance']&&!empty($_POST['tel'])&&!empty($_POST['statut'])&&!empty($_POST['numLogement'])&&!empty($_POST['numEtage'])
    &&!empty($_POST['numRue'])&&!empty($_POST['prefixRueBdAve'])&&!empty($_POST['nomRoute'])&&!empty($_POST['postal'])
    &&!empty($_POST['Ville'])&&!empty($_POST['pays'])
    &&!empty($_POST['typedHab'])&&!empty($_POST['surface'])&&!empty($_POST['piece'])))
{
    include('connexionBD.php');
    
    
    
    
    /*$Datedenaissance =$_POST['dateDeNaissance'];
    $NumeroTelephone = $_POST['tel'];
    $Statut = $_POST['statut'];
    $NumeroLogement = $_POST['numLogement'];
    $NumeroEtage = $_POST['numEtage'];
    $NumeroRue = $_POST['numRue'];
    $Bis = $_POST['numBis'];
    $PrefixRue= $_POST['prefixRueBdAve'];
    $NomRueAveBd=$_POST['nomRoute'];
    $CodePostal = $_POST['postal'];
    $Ville = $_POST['Ville'];
    $Pays = $_POST['pays'];
    $TypeHab = $_POST['typedHab'];
    $surface = $_POST['surface'];
    $Pieces = $_POST['pièce'];*/
    
        $req = $bdd->prepare("UPDATE profil SET Datedenaissance = ?,NumeroTelephone = ?,Statut = ?,NumeroLogement = ?,
                            NumeroEtage = ?,NumeroRue = ?,Bis = ?,PrefixRue = ?,NomRueAveBd = ?, CodePostal = ?, Ville = ?, Pays = ?, TypeHab = ?,surface = ?,Pieces = ? 
                            WHERE Email = ?");
        $req->execute(array(
            $_POST['dateDeNaissance'],
            $_POST['tel'],
            $_POST['statut'],
            $_POST['numLogement'],
            $_POST['numEtage'],
            $_POST['numRue'],
            $_POST['numBis'],
            $_POST['prefixRueBdAve'],
            $_POST['nomRoute'],
            $_POST['postal'],
            $_POST['Ville'],
            $_POST['pays'],
            $_POST['typedHab'],
            $_POST['surface'],
            $_POST['piece'],
            $_SESSION['Email']
            
        ));


        /*echo $_SESSION['Email'];
        echo $_POST['tel'];*/

    
    header('Location:index.php?cible=accueil');

}   
    else
    {
    header('Location:index.php?cible=locataireProprietaire');
    }
?>