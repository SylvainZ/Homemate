<?php
session_start();
if (isset($_GET['etat'])&&isset($_GET['id'])&&isset($_GET['ID'])){
	include('connexionBD.php');
	
	$req = $bdd->prepare('UPDATE actionneurs SET Etat=? WHERE ID = '.$_GET['id']);
	$req->execute(array(
	    $_GET['etat']
	    
	));
		
		
	header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
}
else{
    header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
} ?>