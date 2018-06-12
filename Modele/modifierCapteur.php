<?php
session_start();
if (isset($_POST['seuil'])&&isset($_GET['ID'])){
	include('connexionBD.php');
	$req = $bdd->prepare('SELECT type FROM capteur WHERE ID = '.$_GET['ID']);
	while ($donnees1 = $req->fetch()){
	    if ($donnees1['type'] == "Temperature" ){
	       $req = $bdd->prepare('UPDATE capteur SET seuilT=? WHERE ID = '.$_GET['ID']);
	       $req->execute(array(
	           $_POST['seuil']
	    
	           ));
	    }
	    if ($donnees1['type'] == "Luminosite" ){
	        $req = $bdd->prepare('UPDATE capteur SET SeuilL=? WHERE ID = '.$_GET['ID']);
	        $req->execute(array(
	            $_POST['seuil']
	            
	        ));
	    }
	    if ($donnees1['type'] == "Presence" ){
	        $req = $bdd->prepare('UPDATE capteur SET SeuilD=? WHERE ID = '.$_GET['ID']);
	        $req->execute(array(
	            $_POST['seuil']
	            
	        ));
	    }
	}
	
		
		
	header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
}
else{
    header('Location: index.php?cible=capteur&ID='.$_GET['ID']);
} ?>