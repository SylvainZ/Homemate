<?php
session_start();
if (isset($_POST) && !empty($_POST)){
	include('Modele/ajouterImageBDD.php');
	echo "Les liens de la BDD ont bien été modifié";
    include('Vue/pageDaccueil.php');
}
else{
	 include('../Vue/persoAccueil.php');
}?>
