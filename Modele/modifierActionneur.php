<?php
session_start();

//vérifie que les variables nécessaires à la mofidication existent
if (isset($_GET['etat'])&&isset($_GET['id'])){

    //appelle la BDD homemate

	include('connexionBD.php');

	//met à jour la table actionneurs pour la modification
	$req = $bdd->prepare('UPDATE actionneurs SET Etat=? WHERE ID = '.$_GET['id']);
	$req->execute(array(
	    $_GET['etat']
	));
    include('Controleur/envoieDonneesPasserelle.php');
    envoieTrame(5,$_GET['etat']);
}

elseif (isset($_GET['etatVolet'])&&isset($_GET['idVolet'])){

    //appelle la BDD homemate

    include('connexionBD.php');

    //met à jour la table actionneurs pour la modification
    $req = $bdd->prepare('UPDATE actionneurs SET Etat=? WHERE ID = '.$_GET['idVolet']);
    $req->execute(array(
        $_GET['etatVolet']
    ));
    include('Controleur/envoieDonneesPasserelle.php');
    envoieTrame(4,$_GET['etatVolet']);
}
?>

