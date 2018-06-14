<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Vue/CSS/styleCompte.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">

</head>

<body>

<header>
    <div class="logo"><a href="index.php?cible=accueil"><img src="Vue/images/homemate2.png" alt="logo Homemate"></a></div>
</header>

<section>

	<div class="inscription">

		<form class="form1" name="form" method="post" action="index.php?cible=inscriptionAdminBDD" onsubmit="return validateEmail()">
			<span class="titreinscription">Créer un compte</span>

			<div class="champnom ligne1">
				<label for="nom" class="inputNom">Nom <br></label>
				<input type="text" name="nom"  id="nom" required/><br>
			</div>

			<div class="champnom ligne1 colonne1">
				<label for="prenom" class="inputNom">Prénom</label><br>
				<input type="text" name="prenom" id="prenom" required/>
			</div>

			<div class="champnom ligne2">
				<label for="Email" class="inputNom">Adresse mail</label><br>
				<input type="text" name="Email" id="mail" required/>
				<!-- <p id="verifMail"></p> -->
				<p><?php if(isset($message)){
				    echo $message;
				}
				?> </p>
			</div>

			<div class="champnom ligne2 colonne2">
				<label for="password" class="inputNom">Mot de passe</label><br>
				<input type="password" name="password" id="password" required/>
			</div>

			<div class="valid">
				<input type="submit" name="valider" value="Valider" class="bouton" id="valider">

			</div>
		</form>
	</div>

</section>

<footer>
	<p>Copyright 2018 HomeMate | Tous droits réservés</p>
</footer>
<script type="text/javascript" src="Controleur/JS/creationCompte.js"></script>
 <script src="Controleur/verifEmail.js" type="text/javascript"></script>
</body>
</html>
