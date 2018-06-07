<?php 
session_start();

if(isset($_POST['nom']) && !empty($_POST['nom'])){
	include("Modele/envoieMessage.php");
	
}
else{
	include("Vue/messagerie.php");
}

?>
