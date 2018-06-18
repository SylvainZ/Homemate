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
        <div id="page">
    	<img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" /><span class="profil">Profil</span>
    	
    	<br>
    	<br>
    	<br>

    	
        <div class="bar">
         <div class="aff">
        
            
            <div class="br">
           <span class="texte"> Nom: <?php echo $_SESSION['nom'];?></span><br>
           <span class="texte"> Prénom: <?php echo $_SESSION['prenom'];?></span><br>
           <span class="texte"> Age: <?php echo $_SESSION['age'];?> ans</span><br>
           <span class="texte"> Statut: <?php echo $_SESSION['statut'];?></span><br>
           <span class="texte"> Email: <?php echo $_SESSION['email'];?></span><br>
           <span class="texte"> Téléphone: 0<?php echo $_SESSION['numTel'];?></span><br>
           <span class="texte"> Adresse: <?php echo $_SESSION['numRue'].' '; if ($_SESSION['numBis']!='NONE') {echo $_SESSION['numBis'].' ';} echo $_SESSION['prefixRue'].' '.$_SESSION['nomRueBdAve'].'<br/>';
                   if ($_SESSION['typeHab']=='Appartement') {echo 'Appartement '.$_SESSION['numLogement'].' Etage '.$_SESSION['numEtage'].'<br/>';}
               echo $_SESSION['codePostal'].' '.$_SESSION['ville'].'<br/>';
               echo $_SESSION['pays']; ?></span><br>
            </div>
        </div>
        <div >
         	<a href="index.php?cible=modifieProfil" ><input type=button value = "Modifier le profil" class="boutonModif"/></a> <br>
			
			<a href="index.php?cible=capteurActionneursHabitations"><input type=button value = "Gerer la maison"/></a><br/><br/>           
        </div>
        </div>
        </div>
    	

            <?php include("Vue/footer.php") ?>

    
    </body>
</html>
=======
=======
>>>>>>> 566de374fc64389c84969a034bd2ae0a87e4fdec

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

        <div id="page">
            <img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" /><span class="profil">Profil</span>

            <br>
            <br>
            <br>


            <div class="bar">
                 <div class="aff">


                    <div class="br">
                       <span class="texte"> Nom: <?php echo $_SESSION['nom'];?></span><br>
                       <span class="texte"> Prénom: <?php echo $_SESSION['prenom'];?></span><br>
                       <span class="texte"> Age: <?php echo $_SESSION['age'];?> ans</span><br>
                       <span class="texte"> Statut: <?php echo $_SESSION['statut'];?></span><br>
                       <span class="texte"> Email: <?php echo $_SESSION['email'];?></span><br>
                       <span class="texte"> Téléphone: 0<?php echo $_SESSION['numTel'];?></span><br>
                       <span class="texte"> Adresse: <?php echo $_SESSION['numRue'].' '; if ($_SESSION['numBis']!='NONE') {echo $_SESSION['numBis'].' ';} echo $_SESSION['prefixRue'].' '.$_SESSION['nomRueBdAve'].'<br/>';
                               if ($_SESSION['typeHab']=='Appartement') {echo 'Appartement '.$_SESSION['numLogement'].' Etage '.$_SESSION['numEtage'].'<br/>';}
                           echo $_SESSION['codePostal'].' '.$_SESSION['ville'].'<br/>';
                           echo $_SESSION['pays']; ?></span><br>
                    </div>
                     <a href="index.php?cible=modifieProfil" ><input type=button class="boutonModifProfil" value = "Modifier le profil"/></a> <br>
                </div>
            <div >


                <a href="index.php?cible=capteurActionneursHabitations"><input type=button value = "Gérer la maison" class="boutonModifProfil"/></a><br/><br/>
                <a href="index.php?cible=modifierMDP"><input type=button value = "Modifier votre mot de passe" class="boutonModifProfil"/></a><br/><br/>
            </div>
        </div>
    	

            <?php include("Vue/footer.php") ?>

    
    </body>
</html>

