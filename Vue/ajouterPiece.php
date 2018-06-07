<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un capteur</title>
        <link rel="stylesheet" href="Vue/CSS/ajouterPiece.css"/>
        <link rel="stylesheet" href="Vue/CSS/all.css"/>
    </head>

    <body>
    
<header>
        <?php include("header.php") ?>

</header>

		<div class="piece">

		<form class="form1" method="post" action="index.php?cible=ajoutPiece2&ID=<?php echo $_GET['ID']?>">
			<span class="piece2">Ajouter une pièce</span>

			<div class="champnom ligne1">
				<label for="nom" class="inputNom">Nom <br></label>
				<input type="text" name="nom" id="nom"/><br>	
			</div>

			<div class="champnom ligne1 colonne1">
				<label for="type" class="inputNom">Type</label><br>
					<select name="type" id="type" required/>
					<option value="salon">Salon</option>
					<option value="salle de bain">Salle de bain</option>
					<option value="cuisine">Cuisine</option>
					<option value="chambre">Chambre</option>
					<option value="garage">Garage</option>
					<option value="toilettes">Toilettes</option>
					<option value="autres">Autres</option>
				</select>			
				</div>

			<div class="champnom ligne2">
				<label for="Superficie" class="inputNom">Superficie</label><br>
				<input type="text" name="superficie" id="superficie"/><br>
			</div>
					

			<div class="valid">
				<input type="submit" name="valider" value="Valider" class="bouton">

			</div>

		</form>	
	

	</div>
	    <footer>
	    	<p>
	Copyright 2018 HomeMate | Tous droits réservés
			</p>
		</footer>
    </body>

</html>