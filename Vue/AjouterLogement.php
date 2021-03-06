<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un logement</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Vue/CSS/ajouterLogement.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>



<header>
        <?php include("header.php") ?>

</header>
<div id="page">
<section>

	<div class="logement">

		<form class="form1" method="post"  action="index.php?cible=ajouterLogement">
			<span class="log">Ajouter un logement</span>

			<div class="champnom ligne1">
				<label for="type" class="inputNom">Type <br></label>
				<select name="type" id="type" required/>
					<option value="appartement">Appartement</option>
					<option value="maison">Maison</option>
				</select>
			<br>	
			</div>

			<div class="champnom ligne1 colonne1">
				<label for="adresse" class="inputNom">Adresse</label><br>
				<input type="text" name="adresse" id="adresse"/>
			</div>

			<div class="champnom ligne2">
				<label for="ville" class="inputNom">Ville</label><br>
				<input type="text" name="ville" id="ville"/><br>
			</div>
					
			<div class="champnom ligne2 colonne2">			
				<label for="postal" class="inputNom">Code postal</label><br>
				<input type="text" name="postal" id="postal"/>
			</div>
			
			<div class="champnom ligne3">			
				<label for="piece" class="inputNom">Nombre de pièces</label><br>
				<input type="number" name="piece" id="piece"/>
			</div>
			
			<div class="champnom ligne3 colonne2">			
				<label for="superficie" class="inputNom">Superficie</label><br>
				<input type="number" name="superficie" id="superficie"/>
			</div>
			
			

			<div class="valid">
				<input type="submit" name="valider" value="Valider" class="bouton">

			</div>

		</form>	

	</div>

</section>
</div>
<?php include('footer.php');?>

</body>
</html>