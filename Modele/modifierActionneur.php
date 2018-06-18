<?php
session_start();
if (isset($_GET['etat'])&&isset($_GET['id'])){
	include('connexionBD.php');
	
	$req = $bdd->prepare('UPDATE actionneurs SET Etat=? WHERE ID = '.$_GET['id']);
	$req->execute(array(
	    $_GET['etat']
	    
	));

}
