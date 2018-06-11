<?php
try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
	}

if (isset($_POST['modification'])&&isset($_GET['id']))
{
	$req2 = $bdd->prepare('UPDATE piece SET type= ? WHERE ID ='. $_GET['id'] );
	$req2->execute(array(
		$_POST['modification']

		));

    header('Location:index.php?cible=controleCapteur2');
}
else{
	header('Location:index.php?cible=controleCapteur2');
	}
?>

