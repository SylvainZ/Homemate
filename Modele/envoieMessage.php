<?php
if (isset($_POST['Objet'])){
	include('connexionBD.php');

	$req = $bdd->prepare('INSERT INTO `messagerie`(`Expediteur`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`) VALUES (?,?,?,?,?,?,?)');
		$req->execute(array(
		    $_SESSION['email'],
            $_POST['Objet'],
            date('Y/m/d') ,
            date('h:i:s'),
            'admin@admin.fr',
            $_POST['message'],
            $_SESSION['statut']));

	header('Location: index.php?cible=boiteMail');
}
else{
    header('Location: index.php?cible=messagerie');
} ?>