<?php

$nbLigne=0;
$nbLigne2=0;
$nbLigne3=0;
$nbLigne4=0;
$nbColonne=5;
$nbColonne2=5;
$nbColonne3=5;
$nbColonne4=6;
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Capteurs/Actionneurs</title>

	<link href="Vue/CSS/capteurActionneursHabitation.css" rel="stylesheet">
	<link href="Vue/CSS/all.css" rel="stylesheet">
	
</head>

<body>

	<header>
			<?php include("header.php"); ?>
	</header>
	
	<div id="page">
	
	<div id="en-tete" class="entete">
    <button class="A"><a href="index.php?cible=logement" class="styleEntete"><p class="hab">Habitation(s)</p></a></button>
    <button class="B active"><p>Capteurs/<br>Actionneurs</p></button>
    </div>

	<div id="global">
	<div id="grandmenu">
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
	 					<?php echo 	'<table class="tableau"><tbody>
										<tr id="ligne1">';
										while ($donnees1 = $lumi->fetch()){
										  if (($nbLigne % $nbColonne) ==0 && $nbLigne !=0){
										      echo '</tr><tr>';
										      $nbLigne=0;
                                          }
                                          

										?>
										<td>
										<div class="case">
                                            
                                            <img class="styleCapteur" src="Vue/images/luminosité.png" alt="image capteur de luminosité" height="50px" width="30px">

                                         

										<?php $nomPiece= $bdd->query('SELECT piece.Nom FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece AND capteur.id=\''.$donnees1['id'].'\'');
                                         
                                            while ($donnees2 = $nomPiece->fetch()){?>
                                            
                                                <span><?php echo $donnees2['Nom'];}?></span> <br>
										<span id="capteur"> Luminosité :  </span><p id="trame"></p>
										</div>
										</td>
				

										<?php $nbLigne++;}?>


										 <td id="case"></td>

								<?php echo "</tbody>
								</table>";?>
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
		 				<?php	echo	'<table class="tableau" border="1">
									<tbody>
										<tr id="ligne3">';

										while ($donnees1 = $pres->fetch()){
										    $id=$donnees1['id'];
                                            if (($nbLigne3 % $nbColonne3) ==0 && $nbLigne3 !=0) {
                                                echo '</tr><tr>';
                                                $nbLigne3 = 0;
                                            }
										?>
										<td>
										<div class="case">
                                            
                                            <img class="styleCapteur" src="Vue/images/presence.png" alt="image capteur de presence" height="50px">
                                            
										<?php $nomPiece= $bdd->query('SELECT piece.Nom FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece AND capteur.id=\''.$donnees1['id'].'\'');
                                         
                                            while ($donnees2 = $nomPiece->fetch()){?>
                                           
                                        <span><?php echo $donnees2['Nom']; }?></span> <br>
										<span> Présence : </span><span id="trame"></span><?php echo $donnees1['Presence']; ?>
										</div>
										</td>
										
										
					           <?php $nbLigne3++;}?>


                                <?php	echo '</tbody>
								</table>';?>

							</div>
	 					</div>
	 			</div>
	 	 </div>
   	</div>

   	<div class="menu2">
        <div class="bouton">
		<div class="bande">
		<div class="centre3">
            <button id="bouton" class="boutonBis" onclick="javascript:afficher_cacher('tondiv1');"><span class="style">Actionneurs</span></button>
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
										    if (($nbLigne4 % $nbColonne4) ==0 && $nbLigne4 !=0) {
										        echo '</tr><tr>';
										        $nbLigne4 = 0;}
										?>
										<td>
										<div class="case2">
										
                                            
                                            
                                            <img id="eteindre<?php echo $donnees1['ID']?>" class="styleCapteur" src="Vue/images/marche.png" alt="image interrupteur" height="60px"><br>
                                          <span class="nom"><?php echo $donnees1['nom']?> </span><br>
                                          <?php $nomPiece= $bdd->query('SELECT piece.Nom FROM piece INNER JOIN actionneurs ON piece.ID=actionneurs.idpiece AND actionneurs.id=\''.$donnees1['ID'].'\'');
                                         
                                            while ($donnees2 = $nomPiece->fetch()){?>
                                            
                                        <span class="nomInter"><?php echo $donnees2['Nom'];}?></span> <br>
                                  
                               		
                                    
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
                                        function loadDoc<?php echo $donnees1['ID']?>() {
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
                                                xhttp.open("GET", "index.php?cible=modifierActionneur&id=<?php echo $donnees1['ID']?>&etat=2222", true);
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
                                        										
                                        
                                        
                                        </style>
										
                                                        <?php $nbLigne4++;}?>
                                                        
            
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
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne2">
										 
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
<script rel="script" src="Controleur/JS/tempo.js"></script>





</body>
</html>