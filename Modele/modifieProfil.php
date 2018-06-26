<?php
session_start();

//vérifie si le champ nom est rempli
if (isset($_POST['nom'])){

    //appelle la BDD homemate
	include('connexionBD.php');

	//met à jour la table pour la modification du profil
	$req = $bdd->prepare('UPDATE profil SET Nom = ? ,Prenom= ? ,Statut = ? ,NumeroLogement = ? ,NumeroEtage=?, NumeroRue = ? ,Bis = ? ,NomRueAveBd = ? ,codePostal = ? ,Ville = ? ,Email = ? ,NumeroTelephone = ? ,PrefixRue = ? WHERE Email = ?');

	//si l'utilisateur à cocher le bis pour sa rue
	if(isset($_POST['numBis'])){
		$req->execute(array(htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['statut']),
            htmlspecialchars($_POST['numLogement']),
            htmlspecialchars($_POST['numEtage']),
            htmlspecialchars($_POST['numRue']),
            htmlspecialchars($_POST['numBis']),
            htmlspecialchars($_POST['nomRueBdAve']),
            htmlspecialchars($_POST['codePostal']),
            htmlspecialchars($_POST['ville']),
            htmlspecialchars($_POST['email']),
            htmlspecialchars($_POST['numTel']),
		    htmlspecialchars($_POST['prefixeRueBdAve']),
		    $_SESSION['email']
		));}


	else{
		$req->execute(array(htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['statut']),
            htmlspecialchars($_POST['numLogement']),
            htmlspecialchars($_POST['numEtage']),
            htmlspecialchars($_POST['numRue']),
		    'NONE',
            htmlspecialchars($_POST['nomRueBdAve']),
            htmlspecialchars($_POST['codePostal']),
            htmlspecialchars($_POST['ville']),
            htmlspecialchars($_POST['email']),
            htmlspecialchars($_POST['numTel']),
            htmlspecialchars($_POST['prefixeRueBdAve']),
            $_SESSION['email']
		));
	}
	$_SESSION['email']= htmlspecialchars($_POST['email']);
	$req->closeCursor();
	echo 'vous avez bien enregistré les modifications';

	//renvoi vers le controleur qui va actualiser le profil
	header('Location: index.php?cible=sessionProfilActualisation');
}
else{
    //renvoie vers la page de saisie du formulaire
    header('Location: Vue/modifierProfil.php');
} ?>