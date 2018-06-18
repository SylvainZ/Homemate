<?php
session_start();

//vérifie que l'utilisateur a bien rempli le champ
if (isset($_POST['seuil'])&&isset($_GET['ID'])){

    //appelle la BDD homemate
	include('connexionBD.php');

	//modifie le seuil en fonction du type de capteur
	$req = $bdd->prepare('SELECT type FROM capteur WHERE ID = '.$_GET['ID']);
	while ($donnees1 = $req->fetch()){
	    if ($donnees1['type'] == "Temperature" ){ //capteur de température
	       $req = $bdd->prepare('UPDATE capteur SET seuilT=? WHERE ID = '.$_GET['ID']);
	       $req->execute(array(
	           htmlspecialchars($_POST['seuil'])
	    
	           ));
	    }
	    if ($donnees1['type'] == "Luminosite" ){ //capteur de luminosité
	        $req = $bdd->prepare('UPDATE capteur SET SeuilL=? WHERE ID = '.$_GET['ID']);
	        $req->execute(array(
                htmlspecialchars($_POST['seuil'])
	            
	        ));
	    }
	    if ($donnees1['type'] == "Presence" ){ //capteur de présence
	        $req = $bdd->prepare('UPDATE capteur SET SeuilD=? WHERE ID = '.$_GET['ID']);
	        $req->execute(array(
                htmlspecialchars($_POST['seuil'])
	            
	        ));
	    }
	}
	
		
		
	header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
}
else{
    header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
} ?>