<!DOCTYPE html>
<html>
<head>
    <title>Administrateur - Personnalisation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Vue/CSS/styleAdminPerso.css">
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
				<li class="decoration" ><span class="padding">
				<a href="index.php?cible=controleUser">
				Comptes Utilisateurs</a></span></li>
				<li class="decoration"><span class="padding"><a href="index.php?cible=controleCapteur">Capteurs/Actionneurs</a></span></li>
				<li class="decoration" id="blue"><span class="padding"><a href="index.php?cible=controlePerso">Personnalisation du site</a></span></li>
			</ul>
		</div>
	</section>

	<section class="bloc2">
			<div class="menu">
				<ul>
					<li class="deco2">
						<a href="index.php?cible=controlePersoAccueil">
						Page d'accueil</a></li>
					<li class="deco2">
						<a href="index.php?cible=controleFaqAdmin">
						FAQ</a></li>
                    <li class="deco2">
                        <a href="index.php?cible=inscriptionAdmin">
                            Ajouter un compte administrateur</a></li>
			</div>
        <div class="page">
            <?php include("Vue/footer.php") ?>
        </div>
	</section>


</body>
</html>
