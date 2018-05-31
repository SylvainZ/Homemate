
<?php
session_start();

// Connexion à la base de données
switch($_POST["selection"]){
	case 'supprimer' :

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
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=1 WHERE ID='.$_SESSION['id'][$key]);				
			}
			catch(Exception $e)
			{
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=1 WHERE ID='.$_SESSION['id'][$key]-1);
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=1 WHERE ID='.$_SESSION['id'][$key]);
				echo 'Message supprimé';
			}
		}
	
	}
	
	break;
	
	case 'lu':
	
	break;
	
	case 'non_lu':
	
	break;
}
/*header('Location: boiteReceptionRecherche.php');
*/
?>