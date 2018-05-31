
<?php
session_start();

// Connexion à la base de données
switch($_POST["selection"]){
	case 'restorer' :

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

	// Récupération des 10 derniers messages

	foreach ($_POST as $key => $value) {
		if($key!='supprimer' && $key!='null' ){
			try
			{
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=0 WHERE ID='.$_SESSION['id'][$key]);				
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=0 WHERE ID='.$_SESSION['id'][$key]-1);
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=0 WHERE ID='.$_SESSION['id'][$key]);
			}

		}
	
	}
	
	break;
	
	case 'supprimer':
	
	break;
	

}
header('Location: corbeilleRecherche.php');
?>