
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="modifierProfil.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css">
    <title>Modifier votre profil</title>
</head>

<body>
    <header>
            <?php include("Vue/header.php") ?>
    </header>

<span class="profil">Modifier profil</span>

<div class="bbb">
    <form action="index.php?cible=profilModifie" method="post" enctype="multipart/form-data">
    
     <table>
       	   <tr>
       	      <td>
            		<table>
        		 			<tr>
        				       <td>Nom:</td>
        				       <td><input type="text" name="nom" placeholder="nom" value= <?php echo $_SESSION['nom'];?> ></td>
        				   	</tr>
        				   <tr>
        				   	  <td>Prenom:</td>
        				       <td><input type="text" name="prenom" placeholder="prénom" <?php echo $_SESSION['prenom'];?>></td>
        				   	</tr>
        					<tr>
        				   	  <td>Statut: </td>
        				      <td><select name="statut">
                                    <option value="proprietaire">proprietaire</option>
                                    <option value="locataire">locataire</option>
                                    <option value="gestionnaire">gestionnaire</option>
                                </select></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Numero d'appartement:</td>
        				       <td><input type="text" name="numLogement" placeholder="numéro d'appartement" value=<?php echo $_SESSION['numLogement'];?>/></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Numero d'�tage:</td>
        				       <td><input type="text" name="numEtage" placeholder="numéro d'étage" value= <?php echo $_SESSION['numEtage'];?> /></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Numero de la rue:</td>
        				       <td><input type="text" name="numRue" placeholder="numéro de rue" value=<?php echo $_SESSION['numRue'];?>/></td>
        				   	</tr>

        			</table>
			  </td>
			  <td>
    			   <table>
        		 			
        				   <tr>
        				   	  <td>type: <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label></td>
        				   	
        				       <td><select name="prefixeRueBdAve">
            
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
        				      <td> <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue" alue=<?php echo $_SESSION['nomRueBdAve'];?> /></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Code postal: </td>
        				       <td> <input type="text" name="codePostal" placeholder="département"  value=<?php echo $_SESSION['codePostal'];?> /></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Ville:</td>
        				       <td> <input type="text" name="ville" placeholder="ville" value=<?php echo $_SESSION['ville'];?> /></td>
        				   	</tr>
        				   	<tr>
        				   	  <td>Email:</td>
        				       <td> <input type="text" name="email" placeholder="email" value=<?php echo $_SESSION['email'];?> /></td>
        				   	</tr>
        				   	        				   	<tr>
        				   	  <td>Telephone:</td>
        				       <td> <input type="text" name="numTel" placeholder="numéro de téléphone" value=<?php echo $_SESSION['numTel'];?>/></td>
        				   	</tr>
        			</table>
        		</td>
        	</tr>
        	</table>
			   
    </form>

    </div>
<footer>
        <?php include("Vue/footer.php") ?>
</footer>

    
</body>
</html>