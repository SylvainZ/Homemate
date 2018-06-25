<?php
//appelle la BDD homemate
require('Modele/connexionBD.php');
//vérifie si l'ID de la pièce existe
if(isset($_GET['ID'])){
    $id=$_GET['ID'];
    //sélectionne les capteurs et actionneurs situés dans la pièce en question
    $temp = $bdd->query('SELECT * FROM capteur WHERE type = \'Temperature\' AND idpiece =\''.$_GET['ID'].'\'');
    $lumi = $bdd->query('SELECT * FROM capteur WHERE type = \'Luminosite\' AND idpiece=\''.$_GET['ID'].'\'');
    $pres = $bdd->query('SELECT * FROM capteur WHERE type = \'Presence\' AND idpiece=\''.$_GET['ID'].'\'');
    $volet = $bdd->query('SELECT * FROM actionneurs WHERE type = \'volet\' AND idpiece=\''.$_GET['ID'].'\'');
    $inter = $bdd->query('SELECT * FROM actionneurs WHERE type = \'Interrupteur\' AND idpiece=\''.$_GET['ID'].'\'');
}
$nbLigne=0;
$nbLigne2=0;
$nbLigne3=0;
$nbLigne4=0;
$nbLigne5=0;
$nbColonne=5;
$nbColonne2=5;
$nbColonne3=5;
$nbColonne4=5;
$nbColonne5=5;
?>




<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Capteurs</title>
	 
   
	<link rel="stylesheet" href="Vue/CSS/capteur.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>

	<header>
			<?php include("header.php") ?>
	</header>

<div id="page">
	<div class="adresse">
        	
        	<?php //affiche le nom de la pièce dans laquelle l'utilisateur est
        	$piece = $bdd->query('SELECT * FROM piece WHERE ID =\''.$_GET['ID'].'\'');
        	while ($donnees1 = $piece->fetch()){
        	    
        	 echo $donnees1['Nom'];
        	    
        	} ?>
        	       
        	
    </div>
    <div class = "entete">
        <button class="A active"><a href="index.php?cible=logement" class="styleEntete"><p class="hab"><p>Habitation(s)</p></a></button>
        <button class="B"><a class="styleEntete" href="index.php?cible=capteurActionneursHabitations"><p>Capteurs/</br>Actionneurs</p></a></button>
    </div>

	<div id="global"><div id="grandmenu">
	<div class="menu"> <!--bouton 1 et background-->
		<div class="bouton"><!--  -->
		<div class="bande"><!-- couleur de la bande du bouton (comme pour toutes les classes bandes)-->
		<div class="centre"><!-- mets le bouton au centre (comme pour toutes les classes centres)-->
		
		<!-- bouton qui permet de reduire ou agrandir javascript -->
		<button id="bouton" onclick="javascript:afficher_cacher('tonDiv1');"><span class="style">Capteurs</span></button>
		</div>
		</div>
		</div>
			<div class="tonDiv1" id="tonDiv1">

				<div class="couleur1">
				<div class="bande2">
					<div class="centre2">
					<button id="bouton_tonDiv4" onclick="javascript:afficher_cacher('tonDiv4');"><span class="styleonglet">Détecteur de mouvement</span></button>
	 				</div>
	 				</div>
	 					<div class="tonDiv4" id="tonDiv4">
	 						<div class="luminosite">
		 						<?php	echo	'<table class="tableau" border="1">
									<tbody>
										<tr id="ligne3">';
										while ($donnees1 = $pres->fetch()){
										    /*permet de mettre à la ligne l'image s'il y a plus de nbcolonne images*/
										    $id=$donnees1['id'];
                                            if (($nbLigne3 % $nbColonne3) ==0 && $nbLigne3 !=0) {
                                                echo '</tr><tr>';
                                                $nbLigne3 = 0;
                                            }
										?>
										<td>
										<div class="case">
											<div id="supModif">
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['id']?>">X</a></button>
                                             <div class="posParametre"><a href="#fenetreModaleBis<?php echo $donnees1['id']?>"><img class="parametre" src="Vue/images/parametre.png" alt="image parametre"></a></div>
                                            </div>
                                         
                                            <img class="styleCapteur" src="Vue/images/presence.png" alt="image capteur de presence" height="50px">
                                            <div id="fenetreModale<?php echo $donnees1['id']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer ce capteur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <form method="post" action="index.php?cible=supprimerCapteurActionneur&idSuppressionCapteur=<?php echo $donnees1['id']?>&ID=<?php echo $_GET['ID']?>">
                                                            <input type="submit" value="Supprimer" class="boutonSup">
                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- formulaire modification -->
                                            <div id="fenetreModaleBis<?php echo $donnees1['id']?>">
                                                <div class="popup-block">
                                                    <h3 class="log modiflog">Modification du capteur</h3>

                                                    <div class="logement">

                                                        <form class="form1 form2" method="post"  action="index.php?cible=modifierCapteur&ID=<?php echo $donnees1['id']?>">
                                                            <div class="form2">
                                                                <div class="champnom ligne3">
                                                                    <label for="seuil" class="inputNom">Seuil :</label><br>
                                                                    <input type="number" name="seuil" id="piece" value="<?php echo $donnees1['SeuilL']?>"/>
                                                                </div>
                                                                <br> <br>
                                                                <div class="valid">
                                                                    <input type="submit" name="valider" value="Valider" class="bouton validLogement">

                                                                </div>
                                                            </div>
                                                        </form>
                                                        <a class="annuler1" href="#en-tete"><button class="annuler1">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <span><?php echo $donnees1['piece']?> </span>
										    <span id="trame<?php echo $donnees1['id']?>"></span>
										</div>
										
										<script>
										//recupère les données de la passerelles toutes les 5s
										setInterval('ajaxCall("index.php?cible=recupDonneesPasserelle","trame<?php echo $donnees1['id']?>")', 5000);
										</script>
										
										</td>
										
										<!-- affiche les fenetres pour supprimer et modifer -->
										<style>
                    
                                        #fenetreModale<?php echo $donnees1['id']?>, #fenetreModaleBis<?php echo $donnees1['id']?>
                                        {
                    	                display: none;
                    	                position: fixed;
                    	                top:0; right:0; bottom:0; left:0;
                    	                background-color: rgba(0, 0, 0, 0.5);
                    	                z-index: 1000;}
                    
                                        #fenetreModale<?php echo $donnees1['id']?>:target, #fenetreModaleBis<?php echo $donnees1['id']?>:target
                                        {
                    	                   display: block;
                                        }
                                        
                                        </style>
					
										<?php $nbLigne3++;}?>
										
											<td><a href="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
									<?php echo 	'</tr>
									</tbody>
								</table>'?>
							</div>
	 					</div>
	 			</div>
	 	 </div>
   	</div>

   	<div class="menu2">
   	<div class="bouton">
		<div class="bande">
		<div class="centre3">

		<button id="bouton" onclick="javascript:afficher_cacher('tondiv1');"><span class="style">Actionneurs</span></button>
		</div>
		</div>
		</div>
		
			<div class="tondiv1" id="tondiv1">
				<div class="couleur1">
				<div class="bande2">
					<div class="centre2">
					<button id="bouton_tonDiv2" onclick="javascript:afficher_cacher('tondiv2');"><span class="styleonglet">Lumière</span></button>
						</div>
						</div>
						<div class="tondiv2" id="tondiv2">
							<div class="luminosite">
	 							<?php	echo	'<table class="tableau" border="1">
									<tbody>
										<tr id="ligne4">';?>
										
										<?php 
										while ($donnees1 = $inter->fetch()){
										    $id=$donnees1['ID'];
										    /*permet de mettre à la ligne l'image s'il y a plus de nbcolonne images*/
										    if (($nbLigne4 % $nbColonne4) ==0 && $nbLigne4 !=0) {
										        echo '</tr><tr>';
										        $nbLigne4 = 0;}
										?>
										<td>
										<div class="case2">
										
                                          <button class="supprimer2"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['ID']?>">X</a></button>
                                            
                                            
                                            
                                          <img id="eteindre<?php echo $donnees1['ID']?>" class="styleCapteur" src="Vue/images/marche.png" alt="image interrupteur" height="50px">
                                          <span class="nom"><?php echo $donnees1['nom']?> </span><br>
                                  
                               		
                                                                    
                                
             								
                                            <div id="fenetreModale<?php echo $donnees1['ID']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer cet actionneur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <form method="post" action="index.php?cible=supprimerCapteurActionneur&idSuppressionActionneur=<?php echo $donnees1['ID']?>&ID=<?php echo $_GET['ID']?>">
                                                            <input type="submit" value="Supprimer" class="boutonSup">
                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- fenetre modale pour le graphe -->

                                            
                                            <!-- HTML pour l'interrupteur -->
                                            <div class="inter">
                                            <div class="onoffswitch<?php echo $donnees1['ID']?>">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox<?php echo $donnees1['ID']?>" id="myonoffswitch<?php echo $donnees1['ID']?>" onclick='loadDoc<?php echo $donnees1['ID']?>()'>
                                            <label class="onoffswitch-label<?php echo $donnees1['ID']?>" for="myonoffswitch<?php echo $donnees1['ID']?>">
                                            <span class="onoffswitch-inner<?php echo $donnees1['ID']?>"></span>
                                            <span class="onoffswitch-switch<?php echo $donnees1['ID']?>"></span>
                                            </label>
                                            </div>  
                                            </div>               
                                            
										</div>
										</td>
										
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

                                        <script>
                                        /*fonction ajax qui permet d'envoyer à la base de donner 1 si le bouton est sur on et 2 sinon */
                                        function loadDoc<?php echo $donnees1['ID']?>() {
                                          var xhttp = new XMLHttpRequest();
                                          /*envoie 1 si le bouton est checked*/
                                          if ($("#myonoffswitch<?php echo $donnees1['ID']?>").is(":checked")) {
                                          xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                             document.getElementById("myonoffswitch<?php echo $donnees1['ID']?>").innerHTML = this.responseText;
                                            }
                                          };
                                          xhttp.open("GET", "index.php?cible=modifierActionneur&id=<?php echo $donnees1['ID']?>&etat=1", true);
                                          xhttp.send();
                                        }
                                          else {/*envoie 2 si pas checked*/
                                        	  xhttp.onreadystatechange = function() {
                                                  if (this.readyState == 4 && this.status == 200) {
                                                   document.getElementById("myonoffswitch<?php echo $donnees1['ID']?>").innerHTML = this.responseText;
                                                  }
                                                };
                                                xhttp.open("GET", "index.php?cible=modifierActionneur&id=<?php echo $donnees1['ID']?>&etat=2", true);
                                                xhttp.send();
                                          }
                                              }
                                          
                                        
                                        </script>
                                        
                                        
										
										<style>
										/*interrupteur*/
                                        .onoffswitch<?php echo $donnees1['ID']?> {
                                            position: relative; width: 90px;
                                            -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
                                        }
                                        .onoffswitch-checkbox<?php echo $donnees1['ID']?> {
                                            display: none;
                                        }
                                        .onoffswitch-label<?php echo $donnees1['ID']?> {
                                            display: block; overflow: hidden; cursor: pointer;
                                            border: 2px solid #999999; border-radius: 20px;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?> {
                                            display: block; width: 200%; margin-left: -100%;
                                            transition: margin 0.3s ease-in 0s;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?>:before, .onoffswitch-inner<?php echo $donnees1['ID']?>:after {
                                            display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
                                            font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
                                            box-sizing: border-box;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?>:before {
                                            content: "ON";
                                            padding-left: 10px;
                                            background-color: #34A7C1; color: #FFFFFF;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?>:after {
                                            content: "OFF";
                                            padding-right: 10px;
                                            background-color: #EEEEEE; color: #999999;
                                            text-align: right;
                                        }
                                        .onoffswitch-switch<?php echo $donnees1['ID']?> {
                                            display: block; width: 18px; margin: 6px;
                                            background: #FFFFFF;
                                            position: absolute; top: 0; bottom: 0;
                                            right: 56px;
                                            border: 2px solid #999999; border-radius: 20px;
                                            transition: all 0.3s ease-in 0s; 
                                        }
                                        .onoffswitch-checkbox<?php echo $donnees1['ID']?>:checked + .onoffswitch-label<?php echo $donnees1['ID']?> .onoffswitch-inner<?php echo $donnees1['ID']?> {
                                            margin-left: 0;
                                        }
                                        .onoffswitch-checkbox<?php echo $donnees1['ID']?>:checked + .onoffswitch-label<?php echo $donnees1['ID']?> .onoffswitch-switch<?php echo $donnees1['ID']?> {
                                            right: 0px; 
                                        }
                                        
                                        
                                       
                                        /* affiche les fenetres pour supprimer et modifer */
                                        #fenetreModale<?php echo $donnees1['ID']?>, #fenetreModaleBis<?php echo $donnees1['ID']?>
                                        {
                    	                display: none;
                    	                position: fixed;
                    	                top:0; right:0; bottom:0; left:0;
                    	                background-color: rgba(0, 0, 0, 0.5);
                    	                z-index: 1000;}
                    
                                        #fenetreModale<?php echo $donnees1['ID']?>:target, #fenetreModaleBis<?php echo $donnees1['ID']?>:target
                                        {
                    	                   display: block;
                                        }
                                        
                    
                                        </style>
                                        <?php $nbLigne4++;}?>
										

										 <td><a href="index.php?cible=ajoutActionneur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>

										 <?php	echo '</tbody>
            								</table>';?>
							</div>
						</div>
				</div>
				<div class="couleur1">
				<div class="bande2">
					<div class="centre2">
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tondiv3');"><span class="styleonglet">Volets</span></button>
	 					</div>
	 					</div>
	 					<div class="tondiv3" id="tondiv3">
	 						<div class="luminosite">
		 						<?php	echo	'<table class="tableau" border="1">
									<tbody>
										<tr id="ligne4">';?>
										
										<?php 
										while ($donnees1 = $volet->fetch()){
										    $id=$donnees1['ID'];
										    /*permet de mettre à la ligne l'image s'il y a plus de nbcolonne images*/
										    if (($nbLigne5 % $nbColonne5) ==0 && $nbLigne5 !=0) {
										        echo '</tr><tr>';
										        $nbLigne5 = 0;}
										?>
										<td>
										<div class="case2">
										
                                          <button class="supprimer2"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['ID']?>">X</a></button>
                                            
                                            
                                            
                                          <img  class="styleCapteur" src="Vue/images/volet.jpg" alt="image volet" height="75">
                                          <span class="nom"><?php echo $donnees1['nom']?> </span><br>
                                  
                               		
                                                                    
                                
             								
                                            <div id="fenetreModale<?php echo $donnees1['ID']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer cet actionneur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <form method="post" action="index.php?cible=supprimerCapteurActionneur&idSuppressionActionneur=<?php echo $donnees1['ID']?>&ID=<?php echo $_GET['ID']?>">
                                                            <input type="submit" value="Supprimer" class="boutonSup">
                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- HTML pour l'interrupteur -->
                                            <div class="inter">
                                            <div class="onoffswitch<?php echo $donnees1['ID']?>">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox<?php echo $donnees1['ID']?>" id="myonoffswitch<?php echo $donnees1['ID']?>" onclick='loadDoc<?php echo $donnees1['ID']?>()'>
                                            <label class="onoffswitch-label<?php echo $donnees1['ID']?>" for="myonoffswitch<?php echo $donnees1['ID']?>">
                                            <span class="onoffswitch-inner<?php echo $donnees1['ID']?>"></span>
                                            <span class="onoffswitch-switch<?php echo $donnees1['ID']?>"></span>
                                            </label>
                                            </div>  
                                            </div>               
                                            
										</div>
										</td>
										
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

                                        <script>
                                        /*fonction ajax qui permet d'envoyer à la base de donner 3 si le bouton est sur on et 4 sinon */
                                        function loadDoc<?php echo $donnees1['ID']?>() {
                                          var xhttp = new XMLHttpRequest();
                                          /*envoie 1 si le bouton est checked*/
                                          if ($("#myonoffswitch<?php echo $donnees1['ID']?>").is(":checked")) {
                                          xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                             document.getElementById("myonoffswitch<?php echo $donnees1['ID']?>").innerHTML = this.responseText;
                                            }
                                          };
                                          xhttp.open("GET", "index.php?cible=modifierActionneur&idVolet=<?php echo $donnees1['ID']?>&etatVolet=3", true);
                                          xhttp.send();
                                        }
                                          else {/*envoie 2 si pas checked*/
                                        	  xhttp.onreadystatechange = function() {
                                                  if (this.readyState == 4 && this.status == 200) {
                                                   document.getElementById("myonoffswitch<?php echo $donnees1['ID']?>").innerHTML = this.responseText;
                                                  }
                                                };
                                                xhttp.open("GET", "index.php?cible=modifierActionneur&idVolet=<?php echo $donnees1['ID']?>&etatVolet=4", true);
                                                xhttp.send();
                                          }
                                              }
                                          
                                        
                                        </script>
										
										<style>
										/*interrupteur*/
                                        .onoffswitch<?php echo $donnees1['ID']?> {
                                            position: relative; width: 90px;
                                            -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
                                        }
                                        .onoffswitch-checkbox<?php echo $donnees1['ID']?> {
                                            display: none;
                                        }
                                        .onoffswitch-label<?php echo $donnees1['ID']?> {
                                            display: block; overflow: hidden; cursor: pointer;
                                            border: 2px solid #999999; border-radius: 20px;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?> {
                                            display: block; width: 200%; margin-left: -100%;
                                            transition: margin 0.3s ease-in 0s;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?>:before, .onoffswitch-inner<?php echo $donnees1['ID']?>:after {
                                            display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
                                            font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
                                            box-sizing: border-box;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?>:before {
                                            content: "";
                                            padding-left: 10px;
                                            background-color: #34A7C1; color: #FFFFFF;
                                        }
                                        .onoffswitch-inner<?php echo $donnees1['ID']?>:after {
                                            content: "";
                                            padding-right: 10px;
                                            background-color: #EEEEEE; color: #999999;
                                            text-align: right;
                                        }
                                        .onoffswitch-switch<?php echo $donnees1['ID']?> {
                                            display: block; width: 18px; margin: 6px;
                                            background: #FFFFFF;
                                            position: absolute; top: 0; bottom: 0;
                                            right: 56px;
                                            border: 2px solid #999999; border-radius: 20px;
                                            transition: all 0.3s ease-in 0s; 
                                        }
                                        .onoffswitch-checkbox<?php echo $donnees1['ID']?>:checked + .onoffswitch-label<?php echo $donnees1['ID']?> .onoffswitch-inner<?php echo $donnees1['ID']?> {
                                            margin-left: 0;
                                        }
                                        .onoffswitch-checkbox<?php echo $donnees1['ID']?>:checked + .onoffswitch-label<?php echo $donnees1['ID']?> .onoffswitch-switch<?php echo $donnees1['ID']?> {
                                            right: 0px; 
                                        }
                                        
                                        
                                       
                                        /* affiche les fenetres pour supprimer et modifer */
                                        #fenetreModale<?php echo $donnees1['ID']?>, #fenetreModaleBis<?php echo $donnees1['ID']?>
                                        {
                    	                display: none;
                    	                position: fixed;
                    	                top:0; right:0; bottom:0; left:0;
                    	                background-color: rgba(0, 0, 0, 0.5);
                    	                z-index: 1000;}
                    
                                        #fenetreModale<?php echo $donnees1['ID']?>:target, #fenetreModaleBis<?php echo $donnees1['ID']?>:target
                                        {
                    	                   display: block;
                                        }
                                        
                    
                                        </style>
										<?php $nbLigne5++;}?>
										
										 <td><a href="index.php?cible=ajoutActionneur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
										</tr>
									<?php	echo '</tbody>
            								</table>';?>
							</div>
						</div>
				</div>
	 	 </div>
   	</div>
   </div>
    </div>
</div>


			<?php include("footer.php"); ?>





    <!-- définition fenetre modale -->
    <button style="margin-left: 20px;" type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Courbe</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog" role="document" >
            <div class="modal-content" >
                <div class="modal-header" style="background-color: #6a1b3d">
                    <span style="font-weight: bold; color: white">Modifier ses informations</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> <?php  include('Controleur/courbeStatistique.php'); ?> </div>
            </div>
        </div>
    </div>

<script src="Controleur/JS/agrandirReduire.js" type="text/javascript"></script>
<script src="Controleur/JS/tempo.js" type="text/javascript"></script>




</body>
</html>