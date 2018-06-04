<!DOCTYPE html>
<html>
	<?php
				try
				{
					// On se connecte à MySQL
					$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				catch(Exception $e)
				{
					// En cas d'erreur, on affiche un message et on arrête tout
				        die('Erreur : '.$e->getMessage());
				}

				// Si tout va bien, on peut continuer

				// On récupère tout le contenu de la table jeux_video
				$reponse = $bdd->query('SELECT * FROM jeux_video');
				?>
<head>
    <title>Administrateur - Utilisateur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styleAdminUser.css">
</head>

<body>
	<section id="blocs">
		<div class="image" >
			<img class="homemate" src="images/logo_nouvo.png">
			<img class="profil" src="images/iconeProfil.png">
		</div>

		<div class="tete">
			<ul>
				<li class="decoration" id="blue"><span class="padding">
				<a href="administrateurUser.php">
				Comptes Utilisateurs</a></span></p>
				<li class="decoration"><span class="padding"><a href="administrateurCA.php">Capteurs/Actionnaires</a></span></p></li>
				<li class="decoration"><span class="padding"><a href="administrateurPersonnalisation.php">Personnalisation du site</a></span></p></li></ul>
			</ul>
		</div>
	</section>

	<section class="bloc2">
		
			<form method="POST" action="adminUser.php">
				<p> Rechercher un utilisateur :
				<input type="text" name="nomUser">
				<input type="submit" value="valider">
				</p>
			</form>
			
			
				<table>
					<tr>
					       <td id="tabletete">Nom</td>
					       <td id="tabletete">Prénom</td>
					       <td id="tabletete">Statut</td>
					       <td id="tabletete">Autre</td>
					</tr>
				</table>
			<div class="tableau">
				<table>
					<?php
					   while ($donnees = $reponse->fetch())
					{
					?>		
					<tr>
						<td><?php echo $donnees['nom']; ?></td>
						<td><?php echo $donnees['possesseur']; ?></td>
						<td><?php echo $donnees['prix']; ?></td>
						<td><?php echo $donnees['console']; ?></td>
					</tr>	   	
				   	<?php
				   	}
				   	?>
				</table>
			</div>
	</section>
</body>
</html>
