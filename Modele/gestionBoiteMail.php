
<?php

// Connexion à la base de données
switch($_POST["selection"]){
	case 'supprimer' :

	include('connexionBD.php');

	// Récupération des 10 derniers messages

	foreach ($_POST as $key => $value) {
		if($key!='supprimer'){
			try
			{
				echo $key." ".$value;
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=1 WHERE ID='.$_SESSION['id'][$key]);
				
			}
			catch(Exception $e)
			{
				echo 'Message non supprimé';
			}
		}
	
	}
	
	break;
	
	case 'lu':
        foreach ($_POST as $key => $value) {
            if($key!='lu'){
                try
                {
                    echo $key." ".$value;
                    $bdd->exec('UPDATE `messagerie` SET `Consulte`=1 WHERE ID='.$_SESSION['id'][$key]);

                }
                catch(Exception $e)
                {
                    echo 'Message non supprimé';
                }
            }
        }
	break;
	
	case 'non_lu':
        foreach ($_POST as $key => $value) {
            if($key!='lu'){
                try
                {
                    echo $key." ".$value;
                    $bdd->exec('UPDATE `messagerie` SET `Consulte`=0 WHERE ID='.$_SESSION['id'][$key]);

                }
                catch(Exception $e)
                {
                    echo 'Message non supprimé';
                }
            }
        }
	break;
	
	
}

?>