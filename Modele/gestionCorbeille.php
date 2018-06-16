
<?php


// Connexion à la base de données
switch($_POST["selection"]){
    //Le cas où l'on veut restaurer un message
    case 'restaurer' :

	include('connexionBD.php');

	// Récupération des 10 derniers messages

	foreach ($_POST as $key => $value) {
		if($key!='supprimer' && $key!='null' ){
			try
			{
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=0 WHERE ID='.$_SESSION['id'][$key]);				
			}
			catch(Exception $e)
			{
				echo 'Message non restauré !';
			}

		}
	
	}
	
	break;
	
	case 'supprimer':
	
	break;
	

}
header('Location: index.php?cible=corbeilleRecherche');
?>