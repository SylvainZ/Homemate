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

if (isset($_POST['modification']))
{
	$req = $bdd->prepare('UPDATE piece SET type = :type WHERE ID_logement = :ID_logement');
	$req->execute(array(
		'type' => $_POST['modification'],
		'ID_logement' => 0,
		));
}
if (isset($_POST['ajoutCapteur']))
{
    $req2 = $bdd->prepare('INSERT INTO capteur VALUES');
    $req2->execute(array(
        'type' => $_POST['modification'],
        'ID_logement' => 0,
    ));
}


?>

