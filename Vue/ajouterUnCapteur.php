<?php
include('Modele/connexionBD.php');
$capteur=$bdd->query('SELECT nomType FROM typecapteuractionneur WHERE Capteur=1');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un capteur</title>
        <link rel="stylesheet" href="Vue/CSS/styleNouveauCapteur.css"/>
        <link rel="stylesheet" href="Vue/CSS/all.css" />
    </head>

    <body>
    
    <header>
			<?php include("header.php") ?>
	</header>

    <div id="page">
	    	<section class="ajout">
	        <h1>Ajouter un capteur</h1>
	        <form method="post" action="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>">
	        	<p> 
					<label for="nom_du_capteur" class="nom_capteur">Nom du capteur* : </label><br/>
					<select name="nom_du_capteur" id="nom_du_capteur" required>
                        <?php
                        while($donneesCapteur = $capteur->fetch()){?>
                            <option label="<?php echo $donneesCapteur['nomType'];?>"><?php echo $donneesCapteur['nomType'];}?></option>

					</select><br/><br/>
					
					<label for="numero_de_serie">Numéro de série* : </label><br/>
					<input type="text" name="numero_de_serie" id="numero_de_serie" maxlength="10" placeholder="Ex: XXXXXXXXXX" required/>
					<img src="Vue/images/interrogation.png" alt="un point d'interrogation" title="Il s'agit d'un numéro à 10 caractères composé de chiffres" class="interrogation"/><br/><br/>

					<label for="seuil">Seuil* : </label><br/>
					<input type="number" name="seuil" id="seuil" placeholder="Ex: 10" required/>
					<img src="Vue/images/interrogation.png" alt="un point d'interrogation" title="Indiquez le seuil pour lequel vous voulez recevoir une alerte" class="interrogation"/><br/><br/>

					<!-- <label for="etat">Etat du capteur</label>
					<select name="etat" id="etat">
						<option value="neuf">Neuf</option>
					</select> 	Le nouveau capteur est neuf par défaut--> 


					<label for="description">Description de la localisation (facultatif) : </label><br/>
					<textarea name="description" id="description" rows="10" cols="40" placeholder="Vous pouvez ajouter un descriptif qui vous permettra de savoir où se situe le capteur précisemment dans la pièce.
Ex: Derrière le canapé"/></textarea><br/><br/>

					<input type="submit" value="Valider" class="bouton"/>
					<input type="reset" value="Effacer" class="bouton"/>			
	        	</p>
	        </form>
	    </section>
    </div>

            <?php include("Vue/footer.php"); ?>

    </body>

</html>
