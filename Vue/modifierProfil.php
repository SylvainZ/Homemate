
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/miseEnPageProfil.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css">
    <link rel="stylesheet" href="Vue/CSS/header.css">
    <link rel="stylesheet" href="Vue/CSS/footer.css">
    <title>Modifier votre profil</title>
</head>

<body>
		<header>
            <?php include("Vue/headerSansSession.php") ?>

        </header>

<img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" href="pageDAccueil.php"/> <span class="profil">Profil</span>

<div class="rectangle">

    <form action="index.php?cible=modifieProfil" method="post" enctype="multipart/form-data">
        <p>
            Nom, Prénom, Statut: <br/>
            <input type="text" name="nom" placeholder="nom" value= <?php echo $_SESSION['nom'];?> />
            <input type="text" name="prenom" placeholder="prénom" value= <?php echo $_SESSION['prenom'];?> /><br/>
			<?php //valeur par défaut ?>
            <select name="statut">
                <option value="proprietaire">proprietaire</option>
                <option value="locataire">locataire</option>
                <option value="gestionnaire">gestionnaire</option>
            </select><br /><br/>
            Adresse complète:<br/>
            <input type="text" name="numLogement" placeholder="numéro d'appartement" value=<?php echo $donnees['NumeroAppartement'];?> />
            <input type="text" name="numEtage" placeholder="numéro d'étage" value= <?php echo $donnees['NumeroEtage'];?> /><br />
            <input type="text" name="numRue" placeholder="numéro de rue" value=<?php echo $donnees['NumeroRue'];?> />
            <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label>
            <select name="prefixeRueBdAve">
                <option value="rue">rue</option>
                <option value="bd">boulevard</option>
                <option value="ave">avenue</option>
                <option value="imp">impasse</option>
                <option value="pond">pond</option>
            </select>

            <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue"  value=<?php echo $donnees['NomRueAveBd'];?> /><br/>
            <input type="text" name="codePostal" placeholder="département"  value=<?php echo $donnees['CodePostal'];?> />
            <input type="text" name="ville" placeholder="ville" value=<?php echo $donnees['Ville'];?> /></span><br/>
            Mail:<br/>
            <input type="text" name="email" placeholder="email" value=<?php echo $donnees['Email'];?> /><br/>
            Numéro de téléphone:<br/>
            <input type="text" name="numTel" placeholder="numéro de téléphone" value=<?php echo $donnees['NumeroTelephone'];?> /><br />
            <input type="submit" value="Envoyer les modifications" class="boutonEnvoyerModification"/><br />
            <a href="index.php?cible=profil" >annuler</a>
        </p>
    </form>

    </div>
    
    <footer>
            <?php include("Vue/footer.php") ?>
    </footer>
    
</body>
</html>