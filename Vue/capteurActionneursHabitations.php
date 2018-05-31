<?php
session_start();
try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
    }
    
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $temp = $bdd->query('SELECT * FROM capteur WHERE type = \'Temperature\' AND idpiece = \'1\'');
    $lumi = $bdd->query('SELECT * FROM capteur WHERE type = \'Luminosite\' AND idpiece = \'1\'');
    $pres = $bdd->query('SELECT * FROM capteur WHERE type = \'Presence\' AND idpiece = \'1\'');
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>HOMEMATE</title>
	<link rel="stylesheet" href="Vue/capteurActionneursHabitation.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>
	<dialog id='form'>
    	<section class="ajout">
    		<input type="button" id="save" name="" value="x" onclick="javascript:fermer_fenetre();">
	        <h1>Ajouter un capteur</h1>
	        <form method="post" action="Modele/ajoutCapteur.php">
	        	<p>
					<label for="nom_du_capteur" class="nom">Nom du capteur* : </label><br/>
					<select name="nom_du_capteur" id="nom_du_capteur" required>
						<optgroup label="Température">
							<option value="thermomètre">Thermomètre</option>
							<option value="chaud">Chaud</option>
							<option value="froid">Froid</option>
						</optgroup>
						<optgroup label="Luminosité">
							<option value="lampe_de_bureau">Lampe de bureau</option>
							<option value="lustre">Lustre</option>
							<option value="ampoule">Ampoule</option>
							<option value="globe">Globe</option>
						</optgroup>
						<optgroup label="Présence" >
							<option value="mouvement">Mouvement</option>
							<option value="bouge">Bouge</option>
							<option value="present">Présent</option>
						</optgroup>
					</select><br/><br/>
					
					<label for="numero_de_serie" class="nom">Numéro de série* : </label><br/>
					<input type="text" name="numero_de_serie" id="numero_de_serie" maxlength="10" placeholder="Ex: XXXXXXXXXX" required/>
					<img src="Vue/images/interrogation.png" alt="un point d'interrogation" title="Il s'agit d'un numéro à 10 caractères composé de chiffres et de lettres" class="interrogation"/><br/><br/>

					<label for="seuil" class="nom">Seuil* : </label><br/>
					<input type="number" name="seuil" id="seuil" placeholder="Ex: 10" required/>
					<img src="Vue/images/interrogation.png" alt="un point d'interrogation" title="Indiquez le seuil pour lequel vous voulez recevoir une alerte" class="interrogation"/><br/><br/>

					<!-- <label for="etat">Etat du capteur</label>
					<select name="etat" id="etat">
						<option value="neuf">Neuf</option>
					</select> 	Le nouveau capteur est neuf par défaut--> 

					<label for="piece" class="nom">Pièce* : </label><br/>
					<select name="piece" id="piece" required>
						<option value="salon">Salon</option>
						<option value="cuisine">Cuisine</option>
						<option value="chambre1">Chambre parentale</option>
						<option value="chambre2">Chambre des enfants</option>
						<option value="salle_de_bain1">Salle de bain parentale</option>
						<option value="salle_de_bain2">Salle de bain des enfants</option>
						<option value="toilettes">Toilettes des enfants</option>
					</select>
					<img src="Vue/images/interrogation.png" alt="un point d'interrogation" title="Où se situe le capteur ?" class="interrogation"/><br/><br/>

					<label for="description" class="nom">Description de la localisation : </label><br/>
					<textarea name="description" id="description" rows="10" cols="40" placeholder="Vous pouvez ajouter un descriptif qui vous permettra de savoir où se situe le capteur précisemment dans la pièce.
Ex: Derrière le canapé"/></textarea><br/><br/>

					<input type="submit" value="Valider" class="bouton" onclick="ajouterLigne();"/>
					<input type="reset" value="Effacer" class="bouton"/>			
	        	</p>
	        </form>
	    </section>
	</dialog>
	
	
	<div class = "entete">
	<div class="A"><p>Habitation(s)</p></div>
	<div class="B"><p>Capteurs/</br>Actionneurs</p></div>
	<p class="logo"> <img src="images/cloche.png" width="37" height="37" /> </p>
	<p class="logo2"> <img src="images/profil.png" width="30" height="30" /> </p>
	<p class="logo3"> <img src="images/logo.png" width="150" height="75 " /> </p>
	</div>

	<div class="menu"> <!--bouton 1 et background-->
	
		<button  id="bouton" onclick="javascript:afficher_cacher('tonDiv1');">Capteurs</button>
		
			<div id="tonDiv1" class="tonDiv1">
				<div class=couleur1>
					<button id="bouton_tonDiv2" class="marche" onclick="javascript:afficher_cacher('tonDiv2');">Luminosité</button>
						<div id="tonDiv2" class="tonDiv2">
							<div class="luminosite">
	 							<table class="tableau" border="1">
									<tbody>
										<tr id="ligne1">
										<?php 
										while ($donnees1 = $lumi->fetch()){
										?>
										
										<td>
										<?php echo $donnees1['nom'],$donnees1['piece'], $donnees1['Luminosite']; ?>
										</td>
										<?php }?>
										
										
										 <td><a href ="ajouterUnCapteur.php"> <input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>

										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class=couleur1>
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tonDiv3');">Température</button>
	 					<div id="tonDiv3" class="tonDiv3">
	 						<div class="luminosite">
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne2">
										<?php 
										while ($donnees = $temp->fetch()){
										?>
										
										<td>
										<?php echo $donnees['nom'].'<span> Dans la </span>'.$donnees['piece'].' <span>, il fait </span>'.$donnees['temperature'].'<span> °C</span>'; ?>
										</td>
										<?php }?>
											<td><a href ="ajouterUnCapteur.php"> <input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class=couleur1>
					<button id="bouton_tonDiv4" onclick="javascript:afficher_cacher('tonDiv4');">Détecteur de mouvement</button>
	 					<div id="tonDiv4" class="tonDiv4">
	 						<div class="luminosite">
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne3">
											<?php 
										while ($donnees2 = $pres  ->fetch()){
										?>
										
										<td>
										<?php echo $donnees2['nom'],$donnees2['piece'], $donnees2 ['Presence']; ?>
										</td>
										<?php }?>
										
											<td><a href ="ajouterUnCapteur.php"> <input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>
										</tr>
									</tbody>
								</table>
							</div>
	 					</div>
	 			</div>
	 	 </div>	
   	</div>

   	<div class="menu2"> bouton 1 et background
	
		<button id="bouton">Actionneurs</button>
			<div id="tondiv">
				<br/>
					<button id="bouton2">Lumière</button>
	 					<div id="tondiv2"><ul> <li> Pièce1 </li><li> Pièce2 </li><li> Pièce3 </li></ul></div>
	 				<button id="bouton3">Volets</button>
	 					<div id="tondiv3"><ul> <li> Pièce1 </li><li> Pièce2 </li><li> Pièce3 </li></ul></div>
					
	 	 	</div>	
   	</div>


<script>

	function afficher_cacher(id)
{
    if(document.getElementById(id).style.display=="none")
    {
        document.getElementById(id).style.display="block";
        
    }
    else
    {
        document.getElementById(id).style.display="none";
        
    }
    return true;
}
</script>


	<!--  <script type="text/javascript">

	function ouvrir_fenetre()
	{

			document.getElementById("form").showModal();
	}

	function fermer_fenetre()
	{
			document.getElementById("form").close();
	}

	
	


	function ajouterLigne(id)
	{
	var tableau = document.getElementById(id);

	var ligne = document.getElementById(id);//on a ajouté une ligne

	var colonne1 = ligne.insertCell(0);//on a une ajouté une cellule
	//colonne1.innerHTML += document.getElementById("titre").value;//on y met le contenu de titre
	
	//document.location.href='test.html';
	}
	
	</script>
	
	-->



<footer>Copyright 2018 HomeMate, All Rights Reserved</footer>
</body>
</html>