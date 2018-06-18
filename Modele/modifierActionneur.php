<?php
session_start();
<<<<<<< HEAD
if (isset($_GET['etat'])&&isset($_GET['id'])){
=======
//vérifie que les variables nécessaires à la mofidication existent
if (isset($_GET['etat'])&&isset($_GET['id'])&&isset($_GET['ID'])){

    //appelle la BDD homemate
>>>>>>> 566de374fc64389c84969a034bd2ae0a87e4fdec
	include('connexionBD.php');

	//met à jour la table actionneurs pour la modification
	$req = $bdd->prepare('UPDATE actionneurs SET Etat=? WHERE ID = '.$_GET['id']);
	$req->execute(array(
	    $_GET['etat']
	    
	));
<<<<<<< HEAD

}
=======
		
	//renvoie vers la page capteur
	header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
}
else{
    //renvoie vers la page capteur
    header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
} ?>
>>>>>>> 566de374fc64389c84969a034bd2ae0a87e4fdec
