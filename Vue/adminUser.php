<!DOCTYPE html>
<html>
	<?php
				try
				{
					// On se connecte à MySQL
					$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				catch(Exception $e)
				{
					// En cas d'erreur, on affiche un message et on arrête tout
				        die('Erreur : '.$e->getMessage());
				}

				// Si tout va bien, on peut continuer

				// On récupère tout le contenu de la table jeux_video
				$req = $bdd->query('SELECT * FROM profil WHERE Nom = \''.$_POST['nomUser'].'\''); /**/
				?> 
<head>
    <title>Administrateur - Utilisateur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/styleAdminUser.css">
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
				<a href="administrateurUser.php"></a>
				Comptes Utilisateurs</a></span></p>
				<li class="decoration"><span class="padding"><a href="administrateurCA.php">Capteurs/Actionneurs</a></span></p></li>
				<li class="decoration"><span class="padding"><a href="administrateurPersonnalisation.php">Personnalisation du site</a></span></p></li></ul>
			</ul>
		</div>
	</section>

	<section class="bloc2">
        <div class="tableau">
				<table>
					<tr >
					       <td>Nom</td>
					       <td>Prénom</td>
					       <td>Statut</td>
					       <td>Autre</td>
					</tr>
					<?php
					   while ($donnees = $req->fetch())
					{
					?>
					
					<tr>
						<td><?php echo $donnees['Nom']; ?></td>
						<td><?php echo $donnees['Prenom']; ?></td>
						<td><?php echo $donnees['Statut']; ?></td>
						<td><?php echo $donnees['Email']; ?></td>
					</tr>	 
				   	<?php
				   	}
				   	?>
				</table>
			</div>
	</section>
</body>
</html>
