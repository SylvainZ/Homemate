<!DOCTYPE html>
<html>
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

				// On récupère tout le contenu de la table jeux_video
                if (isset($_POST['nomUser']))
                {
                    $reponse = $bdd->query('SELECT * FROM profil WHERE Nom = \''.$_POST['nomUser'].'\''); /**/
                }
                else{
                    $reponse = $bdd->query('SELECT * FROM profil');
                }

				?>
<head>
    <title>Administrateur - Utilisateur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Vue/CSS/styleAdminUser.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>

    <header>
        <?php include("Vue/header.php") ?>
    </header>

	<section id="blocs">
		<div class="image" >
			<img class="homemate" src="Vue/images/logo_nouvo.png">
			<img class="profil" src="Vue/images/iconeProfil.png">
		</div>

		<div class="tete">
			<ul>
				<li class="decoration" id="blue"><span class="padding">
				<a href="index.php?cible=controleUser">
				Comptes Utilisateurs</a></span></p>
				<li class="decoration"><span class="padding"><a href="index.php?cible=controleCapteur2">Capteurs/Actionneurs</a></span></p></li>
				<li class="decoration"><span class="padding"><a href="index.php?cible=controlePerso">Personnalisation du site</a></span></p></li></ul>
			</ul>
		</div>
	</section>

	<section class="bloc2" class="page">
		
			<form method="POST" action="index.php?cible=controleUser">
				<p> Rechercher un utilisateur :
				<input type="text" name="nomUser">
				<input type="submit" value="Valider" class="valider">
				</p>
			</form>

        <div class="tableau">
				<table>
					<tr>
					       <td id="tabletete">Nom</td>
					       <td id="tabletete">Prénom</td>
					       <td id="tabletete">Statut</td>
					       <td id="tabletete">Autre</td>
					</tr>
					<?php
					   while ($donnees = $reponse->fetch())
					{
					?>		
					<tr>
                        <td><a href="index.php?cible=controleProfilAdmin&id=<?php echo $donnees['ID']?>"><?php echo $donnees['Nom']; ?></a></td>
						<td><?php echo $donnees['Prenom']; ?></td>
						<td><?php echo $donnees['Statut']; ?></td>
						<td><?php echo $donnees['Email']; ?></td>
					</tr>	   	
				   	<?php
				   	}
				   	?>
				</table>
			</div>
        <div class="page">
            <?php include("Vue/footer.php") ?>
        </div>
	</section>



</body>
</html>
