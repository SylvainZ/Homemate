<?php
session_start();

if(isset($_POST['Objet']) && !empty($_POST['Objet'])){
	require("Modele/envoieMessage.php");

}
else{
	if (isset($_SESSION['Admin'])) {
		require('Modele/listeDestinataire.php');

	}
	else if (!isset($_SESSION['Admin']) && isset($_SESSION['email']) ) {
		require('Modele/listeDestinataire.php');
	}
	else {
        $listeDest[] = 'admin@admin.fr';
    	$_SESSION['liste']=$listeDest;
        require("Vue/messagerie.php");
    }
}

?>
