<?php
session_start();
if (isset($_POST) && !empty($_POST)){
	include('Modele/ajouterImageBDD.php');
    include('Vue/pageDaccueil.php');
}
else{
	 include('../Vue/persoAccueil.php');
}?>
