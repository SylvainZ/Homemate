<?php
session_start();

if(isset($_POST['Objet']) && !empty($_POST['Objet'])){
	include("Modele/envoieMessage.php");

}
else{
	include("Vue/messagerie.php");
}

?>
