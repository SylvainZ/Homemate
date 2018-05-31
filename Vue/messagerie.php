<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Vue/CSS/miseEnPageMessagerie.css" />
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <link rel="stylesheet" href="Vue/CSS/header.css">
        <link rel="stylesheet" href="Vue/CSS/footer.css">
        <title>Messagerie</title>
    </head>

    <body>
    	<!--Mise en place de la barre de conexion-->
		<header>
			<?php include("header.php"); ?>
		</header>

    	<br />
    	<div class="en_tete">
    		<img src="Vue/images/lettre.png" class="iconeLettre" alt="Icône lettre"/> <h1>Envoyer un message</h1>
    	</div>
    	<!--<img src="images/homemate2.png" class="logo" alt="image du logo" href="pageDAccueil.php"/>
    	<span class="nomSite">HOMEMATE</span>-->
    	<div class="rectangle">
    	<div class="col1">
			<p>
		        <label for="nom">Nom</label><br />
		        <input type="text" class="zoneTexte" name="nom" /><br />
		        <label for="email">E-mail</label><br />
		        <input type="text" class="zoneTexte" name="E-mail" /><br />
		        <label for="objet">Objet</label><br />
		        <input type="text" class="zoneTexte" name="Objet" /><br />
		        
		        <label for="message">Comment pouvons-nous vous aider?</label><br />
	       		<textarea class="zoneMessage" name="message" rows="12" cols="87"></textarea><br />
	       		<input type="submit"  class="zoneEnvoie" name="Envoyer" value="Envoyer"/>
	    	</p>
	    </div>

	    <footer>
			<?php include("footer.php"); ?>
    	</footer>
    </body>
</html>