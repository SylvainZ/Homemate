
<?php
// Connexion à la base de données
include('connexionBD.php');

//distinction des différents cas à l'aide d'un switch
switch(htmlspecialchars($_POST["selection"])){

    //Le cas où l'on veut supprimer un message
	case 'supprimer' :

	// Récupération des 10 derniers messages

	foreach ($_POST as $key => $value) {
		if($key!='supprimer'){
			try
			{
				echo $key." ".$value;
				//Place la colonne corbeille de la table à 1 pour spécifier que le message apparaitra dans la corbeille
				$bdd->exec('UPDATE `messagerie` SET `Corbeille`=1 WHERE ID='.$_SESSION['id'][$key]);
				
			}
			catch(Exception $e)
			{
				echo 'Message non supprimé';
			}
		}
	
	}
	
	break;

    //Le cas où l'on veut marquer un message comme lu
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

    //Le cas où l'on veut marquer un message comme non lu
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