
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
    	
    	<img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" /><span class="profil">Profil</span>

    	
    	        <div class="bar">
         <div class="aff">
        
            <h1>Votre profil</h1>
            <div class="br">
            Nom: <?php echo $_SESSION['nom'];?><br>
            Prenom: <?php echo $_SESSION['prenom'];?><br>
            Age: <?php echo $_SESSION['age'];?> ans<br>
            Statut: <?php echo $_SESSION['statut'];?><br>
            Email: <?php echo $_SESSION['email'];?><br>
            Telephone: 0<?php echo $_SESSION['numTel'];?><br>
            Addresse: <?php echo $_SESSION['numRue'].' '.$_SESSION['nomRueBdAve'].' '.$_SESSION['numLogement'].' '.$_SESSION['codePostal'].' '.$_SESSION['ville'];?><br> 
            </div>
        </div>
        <div >
         	<a href="index.php?cible=modifieProfil" ><input type=button value = "Modifier le profil"/></a> <br>
			
			<a href="index.php?cible=capteurActionneursHabitations"><input type=button value = "Gerer la maison"/></a><br/><br/>           
        </div>
    	
    	

            <?php include("Vue/footer.php") ?>

    
    </body>
</html>
