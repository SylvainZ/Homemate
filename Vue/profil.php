
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Vue/CSS/miseEnPageProfil.css" />
        <link rel="stylesheet" href="Vue/CSS/all.css" />
        <title>Profil</title>
    </head>

    <body>
    	<header>
            <?php include("Vue/header.php") ?>

        </header>
    	<br />
    	
    	<a href="index.php?cible=accueil"><img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" /></a> <span class="profil">Profil</span>

    	
    	<div class="rectangle">
    		<div class="col1">
				<p>
					Nom, Prénom, Statut: <br/>
					<span class="valeurImporte"> <?php echo $_SESSION['nom'].', '.$_SESSION['prenom'];?></span><br/>
					<span class="valeurImporte"> <?php echo $_SESSION['datedenaissance'];?></span><br/>
					<span class="valeurImporte"> <?php echo $_SESSION['statut'];?></span><br/>
					Adresse complète:<br/>
					<span class="valeurImporte"> Batiment <?php echo $_SESSION['numLogement'].', Etage '.$_SESSION['numEtage'];?></span><br/>
					<span class="valeurImporte"> <?php echo $_SESSION['numRue'].' '.$_SESSION['numBis'].' '.$_SESSION['nomRueBdAve'];?>  </span><br/>
					<span class="valeurImporte"> <?php echo $_SESSION['codePostal'].' '.$_SESSION['ville'];?> </span><br/>
					Mail:<br/>
					<span class="valeurImporte"> <?php echo $_SESSION['email'];?></span><br/>
					Numéro de téléphone:<br/>
					<span class="valeurImporte"> <?php echo $_SESSION['numTel'];?></span>
						
					<a href="index.php?cible=modifieProfil	" ><input type=button value = "Modifier le profil" class= "modifProfil"/></a> 
	    	</div>
	    	<div class="col2">
				<p>
					<a href="index.php?cible=boiteMailReception"><img src="Vue/images/iconeMail.png" class="image" alt="image du mail"/></a>
					<a href="index.php?cible=boiteMailReception"><span>Boîte de réception</span></a><br/><br/>
					<!--  <img src="Vue/images/iconeFacture.png" class="image" alt="image du facture" href="pageDAccueil.php"/>
					<span href="Vue/pageDAccueil.php">Facture</span><br/><br/>
					<img src="images/iconeAutorisation.png" class="image" alt="icône d'une famille" href="pageDAccueil.php"/>
					<span href="Vue/pageDAccueil.php">Autorisation</span><br/><br/> -->
					<a href="index.php?cible=capteurActionneursHabitations"><img src="Vue/images/iconeMaisonArbre.png" class="image" alt="icône du maison" /></a>
					<a href="index.php?cible=capteurActionneursHabitations"><span>Gérer la maison</span></a><br/><br/>
		    	</p>
	    	</div>
    	<div/>
    	
    	    <footer>
            <?php include("Vue/footer.php") ?>
    		</footer>
    
    </body>
</html>