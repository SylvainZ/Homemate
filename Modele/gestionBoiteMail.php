
<?php
session_start();

// Connexion à la base de données
switch($_POST["selection"]){
	case 'supprimer' :

	include('connexionBD.php');

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

//include('Vue/boiteMail.php');
/*header('Location: boiteReceptionRecherche.php');
*/
?>