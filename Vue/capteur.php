
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
    $inter = $bdd->query('SELECT * FROM actionneurs WHERE type = \'interrupteur\' AND idpiece=\''.$_GET['ID'].'\'');
}


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
		<div class="bouton">
		<div class="bande">
		<div class="centre">
		<button id="bouton" onclick="javascript:afficher_cacher('tonDiv1');"><span class="style">Capteurs</span></button>
		</div>
		</div>
		</div>
			<div class="tonDiv1" id="tonDiv1">
				<div class="couleur1">
					<div class="bande2">
					<div class="centre2">
					<button class="marche" id="bouton_tonDiv2" onclick="javascript:afficher_cacher('tonDiv2');"><span class="styleonglet">Luminosité</span></button>
					</div>
					</div>
						<div class="tonDiv2" id="tonDiv2">
							<div class="luminosite">
	 							<table class="tableau" border="1">
									<tbody>
										<tr id="ligne1">
										<?php 
										while ($donnees1 = $lumi->fetch()){
										   // $rows[]=
										?>
										<td>
										<div class="case">
										 <div id="supModif">
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['id']?>">X</a></button>
                                            <div class="posParametre"><a href="#fenetreModaleBis<?php echo $donnees1['id']?>"><img class="parametre" src="Vue/images/parametre.png" alt="image parametre"></a></div>
                                         </div>
                                            

                                            <div id="fenetreModale<?php echo $donnees1['id']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer ce capteur ?</h3>
                                                    <div class="annulerSupprimer">
                                                    <form method="post" action="index.php?cible=supprimerCapteur&id=<?php echo $donnees1['id']?>">
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


                                                        <form class="form1 form2" method="post"  action="index.php?cible=modifierCapteur&ID=<?php echo $donnees1['ID']?>">

                                                        <form class="form1 form2" method="post"  action="index.php?cible=modifCapteur&ID=<?php echo $donnees1['id']?>">


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
                                            <img class="styleCapteur" src="Vue/images/luminosité.png" alt="image capteur de luminosité" height="50px" width="30px">

                                            <span><?php echo $donnees1['piece']?></span>
										<span> Luminosité : </span><?php echo $donnees1['Luminosite']; ?>
										</div>
										</td>
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

										<?php }?>


										 <td><a href="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td> 

										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class="couleur1">
					<div class="bande2">
					<div class="centre2">
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tonDiv3');"><span class="styleonglet">Température</span></button>
	 				</div>
	 				</div>
	 					<div class="tonDiv3" id="tonDiv3">
	 						<div class="luminosite">
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne2">
										<?php 
										while ($donnees1 = $temp->fetch()){
                                            $id=$donnees1['id'];
										?>
										<td>
										<div class="case">
											<div id="supModif">
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['id']?>">X</a></button>
                                            <div class="posParametre"><a href="#fenetreModaleBis<?php echo $donnees1['id']?>"><img class="parametre" src="Vue/images/parametre.png" alt="image parametre"></a></div>
                                            </div>
                                            <img class="styleCapteur" src="Vue/images/temperature.png" alt="image capteur temperature" height="50px" width="50px">

                                            <div id="fenetreModale<?php echo $donnees1['id']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer ce capteur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <a href="index.php?cible=supprimerCapteur&id=<?php echo $donnees1['id']?>">
                                                            <button class="boutonSup">Supprimer</button></a>

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
                                                                    <input type="number" name="seuil" id="piece" value="<?php echo $donnees1['seuilT']?>"/>
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


                                            <span><?php echo $donnees1['piece']?></span>
										<span> Température : </span><?php echo $donnees1['temperature']; ?>
										</div>
										</td>
										
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
										<?php }?>
										<td><a href="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class="couleur1">
				<div class="bande2">
					<div class="centre2">
					<button id="bouton_tonDiv4" onclick="javascript:afficher_cacher('tonDiv4');"><span class="styleonglet">Détecteur de mouvement</span></button>
	 				</div>
	 				</div>
	 					<div class="tonDiv4" id="tonDiv4">
	 						<div class="luminosite">
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne3">
										<?php 
										while ($donnees1 = $pres->fetch()){
										    $id=$donnees1['id'];
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
                                                        <form method="post" action="index.php?cible=supprimerCapteur&id=<?php echo $donnees1['id']?>">
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

                                                        <form class="form1 form2" method="post"  action="index.php?cible=modifierCapteur&ID=<?php echo $donnees1['ID']?>">
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
										<span> Présence : </span><?php echo $donnees1['Presence']; ?>
										</div>
										</td>
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
										<?php }?>
										
											<td><a href="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
										</tr>
									</tbody>
								</table>
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
	 							<table class="tableau" border="1">
									<tbody>
										<tr id="ligne1">
										
										<?php 
										while ($donnees1 = $inter->fetch()){
										    $id=$donnees1['ID'];
										?>
										<td>
										<div class="case2">
										
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['ID']?>">X</a></button>
                                            
                                            
                                            
                                            <img id="eteindre<?php echo $donnees1['ID']?>" class="styleCapteur" src="Vue/images/marche.png" alt="image interrupteur" height="50px">
                                          <span class="nom"><?php echo $donnees1['nom']?> </span><br>
                                  
                               		
                                                                    
                                
             
                                            <div id="fenetreModale<?php echo $donnees1['ID']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer cet actionneur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <form method="post" action="index.php?cible=supprimerActionneur&id=<?php echo $donnees1['ID']?>">
                                                            <input type="submit" value="Supprimer" class="boutonSup">
                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="onoffswitch<?php echo $donnees1['ID']?>">
                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox<?php echo $donnees1['ID']?>" id="myonoffswitch<?php echo $donnees1['ID']?>" onclick='loadDoc()'>
                                            <label class="onoffswitch-label<?php echo $donnees1['ID']?>" for="myonoffswitch<?php echo $donnees1['ID']?>">
                                            <span class="onoffswitch-inner<?php echo $donnees1['ID']?>"></span>
                                            <span class="onoffswitch-switch<?php echo $donnees1['ID']?>"></span>
                                            </label>
                                            </div>                 
                                            
										</div>
										</td>
										
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

                                        <script>
                                        function loadDoc() {
                                          var xhttp = new XMLHttpRequest();
                                          if ($("#myonoffswitch<?php echo $donnees1['ID']?>").is(":checked")) {
                                          xhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                             document.getElementById("myonoffswitch<?php echo $donnees1['ID']?>").innerHTML = this.responseText;
                                            }
                                          };
                                          xhttp.open("GET", "index.php?cible=modifierActionneur&id=<?php echo $donnees1['ID']?>&etat=1111", true);
                                          xhttp.send();
                                        }
                                          else {
                                        	  xhttp.onreadystatechange = function() {
                                                  if (this.readyState == 4 && this.status == 200) {
                                                   document.getElementById("myonoffswitch<?php echo $donnees1['ID']?>").innerHTML = this.responseText;
                                                  }
                                                };
                                                xhttp.open("GET", "index.php?cible=modifierActionneur&id=<?php echo $donnees1['ID']?>&etat=0000", true);
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
                                        										
                                        
                                        #fenetreModale<?php echo $donnees1['ID']?>
                                        {
                    	                display: none;
                    	                position: fixed;
                    	                top:0; right:0; bottom:0; left:0;
                    	                background-color: rgba(0, 0, 0, 0.5);
                    	                z-index: 1000;}
                    
                                        #fenetreModale<?php echo $donnees1['ID']?>:target
                                        {
                    	                   display: block;
                                        }
                    
                                        </style>
										<?php }?>

										 <td><a href="index.php?cible=ajoutActionneur&ID=<?php echo $_GET['ID']?>""> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>

										</tr>
									</tbody>
								</table>
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
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne2">
										 <td><a href="index.php?cible=ajoutActionneur&ID=<?php echo $_GET['ID']?>""> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
	 	 </div>
   	</div>
   </div>
    </div>
</div>


			<?php include("footer.php"); ?>

    


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

</body>
</html>