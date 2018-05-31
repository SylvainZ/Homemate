
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
    	
    	<img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" href="index.php?cible=accueil"/> <span class="profil">Profil</span>

    	
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
					<img src="Vue/images/iconeMail.png" class="image" alt="image du mail" href="pageDAccueil.php"/>
					<span href="pageDAccueil.php">Boîte de réception</span><br/><br/>
					<img src="Vue/images/iconeFacture.png" class="image" alt="image du facture" href="pageDAccueil.php"/>
					<span href="Vue/pageDAccueil.php">Facture</span><br/><br/>
					<img src="images/iconeAutorisation.png" class="image" alt="icône d'une famille" href="pageDAccueil.php"/>
					<span href="Vue/pageDAccueil.php">Autorisation</span><br/><br/> 
					<img src="images/iconeMaisonArbre.png" class="image" alt="icône du maison" href="pageDAccueil.php"/>
					<span href="Vue/pageDAccueil.php">Gérer la maison</span><br/><br/>
		    	</p>
	    	</div>
    	<div/>
    	
    	    <footer>
            <?php include("Vue/footer.php") ?>
    		</footer>
    
    </body>
</html>