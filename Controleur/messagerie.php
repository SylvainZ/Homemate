<?php
session_start();

if(isset($_POST['Objet']) && !empty($_POST['Objet'])){
	include("Modele/envoieMessage.php");

}
else{
	if (isset($_SESSION['Admin'])) {
		include('Modele/listeDestinataire.php');

	}
	else if (!isset($_SESSION['Admin']) && isset($_SESSION['email']) ) {
		include ('Modele/listeDestinataire.php');
	}
	else {
        $listeDest[] = 'admin@admin.fr';
    	$_SESSION['liste']=$listeDest;
        include("Vue/messagerie.php");
    }
}

?>
