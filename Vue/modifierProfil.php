
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/mdp.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css">
    <title>Modifier votre profil</title>
</head>

<body>
<!--Mise en place de la barre de connexion-->
    <header>
            <?php include("Vue/header.php") ?>
    </header>
    <!--Début de la page de modifier profil -->
<h1>Modifier profil</h1>

<div class="bloc">
    <!--Debut du formulaire-->
    <form action="index.php?cible=profilModifie" method="post" enctype="multipart/form-data" onsubmit="return modifProfil()">
    
     <table>
       	   <tr>
       	      <td>
            		<table>
                        <!--Debut des champs de input-->
        		 			<tr>
        				       <td>Nom:</td>
        				       <td><input type="text" name="nom" placeholder="nom" value= <?php echo $_SESSION['nom'];?> ></td>
        				   	</tr>
        				   <tr>
        				   	  <td>Prénom:</td>
        				       <td><input type="text" name="prenom" placeholder="prÃ©nom" value="<?php echo $_SESSION['prenom'];?>"/></td>

        				   	</tr>
        					<tr>
        				   	  <td>Statut: </td>
        				      <td><select name="statut">
                                    <option value="proprietaire">proprietaire</option>
                                    <option value="locataire">locataire</option>
                                </select></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Numéro d'appartement:</td>
        				       <td><input type="text" name="numLogement" placeholder="numÃ©ro d'appartement" value=<?php echo $_SESSION['numLogement'];?>></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Numéro d'étage:</td>
        				       <td><input type="text" name="numEtage" placeholder="numÃ©ro d'Ã©tage" value= <?php echo $_SESSION['numEtage'];?> ></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Numéro de la rue:</td>
        				       <td><input type="text" name="numRue" placeholder="numÃ©ro de rue" value=<?php echo $_SESSION['numRue'];?>></td>
        				   	</tr>

        			</table>
			  </td>
			  <td>
    			   <table>
        		 			
        				   <tr>
        				   	  <td>Type:</td>
        				   	
        				       <td> <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label>
                                   <select name="prefixeRueBdAve">

                                    <option value="rue">rue</option>
                                    <option value="bd">boulevard</option>
                                    <option value="ave">avenue</option>
                                    <option value="imp">impasse</option>
                                    <option value="pond">pond</option>
                
            						</select>
            				  </td>
        				   	</tr>
        					<tr>
        				   	  <td>Nom de rue: </td>

        				      <td> <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue" value="<?php echo $_SESSION['nomRueBdAve'];?>" /></td>

        				   	</tr>
        				   	<tr>
        				   	  <td>Code postal: </td>
        				       <td> <input type="text" id="codePostal" name="codePostal" placeholder="dÃ©partement"  value=<?php echo $_SESSION['codePostal'];?> ><div id="nonPostal"></div>
                               </td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Ville:</td>
        				       <td> <input type="text" name="ville" placeholder="ville" value=<?php echo $_SESSION['ville'];?> ></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Email:</td>
        				       <td> <input type="text" name="email" placeholder="email" value=<?php echo $_SESSION['email'];?> ></td>
        				   	</tr>
        				   	        				   	<tr>
        				   	  <td>Téléphone: </td>
        				       <td> <input type="text" id="numTel" name="numTel" placeholder="numÃ©ro de tÃ©lÃ©phone" value=0<?php echo $_SESSION['numTel'];?>><div id="nonNum"></div>
                               </td>
        				   	</tr>
        			</table>
        		</td>
        	</tr>
        	</table>

        <!--Bouton d'envoie-->
            <input class="valider" type="submit" value="Envoyer les modifications" class="boutonEnvoyerModification"/>

        <!--Bouton pour revenir à la page de profil-->
            <a href="index.php?cible=profil" ><input class="valider" type="button" value="Annuler"/></a>
    </form>

    </div>

<!--Debut du javascript-->
    <script type="text/javascript" src="Controleur/JS/locataireproprietaire.js"></script>

<!--Debut du footer-->
<footer>
        <?php include("Vue/footer.php") ?>
</footer>

    
</body>
</html>
