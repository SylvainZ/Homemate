<!DOCTYPE html>
<html>
<head>
    <title>Administrateur - Capteur/Actionneur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Vue/CSS/styleAdminCA.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
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
		// Si tout va bien, on peut continuer
		$reponse_capteur = $bdd->query('SELECT * FROM piece');
?>
</head>

<body>

	<section id="blocs">
		<div class="image" >
			<img class="homemate" src="images/logo_nouvo.png">
			<img class="profil" src="images/iconeProfil.png">
		</div>

		<div class="tete">
			<ul>
				<li class="decoration"><span class="padding">
				<a href="index.php?cible=controleUser">
				Comptes Utilisateurs</a></span></p>
				<li class="decoration" id="blue"><span class="padding"><a href="index.php?cible=controleCapteur">Capteurs/Actionneurs</a></span></p>
				<li class="decoration"><span class="padding"><a href="index.php?cible=controlePerso">Personnalisation du site</a></span></p>
			</ul>
		</div>
	</section>

	<section class="bloc2">
		<h1 >Voici les capteurs :</h1>
			<ul class="decalage">
<?php
	while ($donnees = $reponse_capteur->fetch())
	{
	?>		
		<li class="decoliste">
		<?php echo $donnees['Type'];?>
		<?php echo $donnees['Nom']?>
			<form action="index.php?cible=controleCapteur" method="POST" class="position">
				<input type="text" name="modification" style= "width:10vw;">
				<input type="submit" value="Modfier type">
			</form>
		</li>	   	
<?php
}
?>


	</section>




</body>
</html>
