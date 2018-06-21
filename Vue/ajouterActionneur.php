
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ajouter un actionneur</title>
        <link rel="stylesheet" href="Vue/CSS/ajouterActionneur.css"/>
        <link rel="stylesheet" href="Vue/CSS/all.css" />
    </head>

    <body>
    
    <header>
			<?php include("header.php") ?>
	</header>

    <div id="page">
	    	<section class="ajout">
	        <h1>Ajouter un actionneur</h1>
	        
	     
	        <form method="post" action="index.php?cible=ajoutActionneur2&ID=<?php echo $_GET['ID']?>">
	        	<p>
                    <label for="nom_actionneur">Nom de l'actionneur* : </label><br/>
                    <input type="text" name="nom_actionneur" id="nom_actionneur" maxlength="10" required/><br/><br/>

					<label for="type_actionneur" class="type_actionneur">Nom de l'actionneur* : </label><br/>
					<select name="type_actionneur" id="type_actionneur">
							<option value="volet">Volet</option>
							<option value="Interrupteur">Interrupteur</option>
					</select>
					<br/><br/>
					
					<label for="numero_de_serie">Numéro de série* : </label><br/>
					<input type="text" name="numero_de_serie" id="numero_de_serie" maxlength="10" placeholder="Ex: XXXXXXXXXX" required/>
					<img src="Vue/images/interrogation.png" alt="un point d'interrogation" title="Il s'agit d'un numéro à 10 caractères composé de chiffres et de lettres" class="interrogation"/><br/><br/>
					
					<br>
					
					
					<input type="submit" value="Valider" class="bouton"/>
					<input type="reset" value="Effacer" class="bouton"/>	
					
	        	</p>
	        </form>
	    </section>
    </div>

            <?php include("Vue/footer.php") ?>

    </body>

</html>