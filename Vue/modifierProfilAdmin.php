
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/miseEnPageProfil.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css">
    <title>Modifier votre profil</title>
</head>

<body>
<header>
    <?php include("Vue/header.php") ?>

</header>

<img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" href="pageDAccueil.php"/> <span class="profil">Profil</span>

<div class="rectangle">

    <form action="index.php?cible=profilModifie" method="post" enctype="multipart/form-data">
        <p>
            Nom, Prénom, Statut: <br/>
            <input type="text" name="nom" placeholder="nom" value= <?php echo $_SESSION['nom'];?> />
            <input type="text" name="prenom" placeholder="prénom" value= <?php echo $_SESSION['prenom'];?> /><br/>
            <?php //valeur par défaut ?>

            Adresse complète:<br/>
            <input type="text" name="adresse" placeholder="Adresse" value=<?php echo $_SESSION['adresse'];?> /> <br/>
            <input type="text" name="codePostal" placeholder="Code Postal" value= <?php echo $_SESSION['codePostal'];?> />
            <input type="text" name="ville" placeholder="Ville" value=<?php echo $_SESSION['ville'];?> /><br/>
            <input type="text" name="pays" placeholder="Pays" value=<?php echo $_SESSION['pays'];?> /><br/>

            Mail:<br/>
            <input type="text" name="email" placeholder="E-mail" value=<?php echo $_SESSION['email'];?> /><br/>

            Numéro de téléphone:<br/>
            <input type="text" name="numTel" placeholder="Numéro de téléphone" value=<?php echo $_SESSION['numTel'];?> /><br />
            <input type="submit" value="Envoyer les modifications" class="boutonEnvoyerModification"/><br />
            <a href="index.php?cible=profil" ><input type="button" value="Annuler"/></a>
        </p>
    </form>

</div>

<footer>
    <?php include("Vue/footer.php") ?>
</footer>

</body>
</html>