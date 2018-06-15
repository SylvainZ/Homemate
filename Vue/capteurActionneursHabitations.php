<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$temp = $bdd->query('SELECT * FROM capteur WHERE type = \'Temperature\' AND iduser =\''.$_SESSION['ID'].'\'');
$lumi = $bdd->query('SELECT * FROM capteur WHERE type = \'Luminosite\' AND iduser=\''.$_SESSION['ID'].'\'');
$pres = $bdd->query('SELECT * FROM capteur WHERE type = \'Presence\' AND iduser =\''.$_SESSION['ID'].'\'');

$nbLigne=0;
$nbLigne2=0;
$nbLigne3=0;
$nbColonne=5;
$nbColonne2=5;
$nbColonne3=5;
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
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['id']?>">X</a></button>
                                            <img class="styleCapteur" src="Vue/images/luminosité.png" alt="image capteur de luminosité" height="50px" width="30px">

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

										<?php $nomPiece= $bdd->query('SELECT piece.Nom FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece AND capteur.idpiece=\''.$donnees1['idpiece'].'\'');
                                         
                                            while ($donnees2 = $nomPiece->fetch()){?>
                                            
                                                <span><?php echo $donnees2['Nom'];}?></span> <br>
										<span> Luminosité : <p id="trame"></p> </span><?php echo $donnees1['Luminosite']; ?>
										</div>
										</td>
										
					<style>
                    
                    #fenetreModale<?php echo $donnees1['id']?>
                    {
	                display: none;
	                position: fixed;
	                top:0; right:0; bottom:0; left:0;
	                background-color: rgba(0, 0, 0, 0.5);
	                z-index: 1000;}

                    #fenetreModale<?php echo $donnees1['id']?>:target
                    {
	                   display: block;
                    }
                    
                    </style>

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
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tonDiv3');"><span class="styleonglet">Température</span></button>
	 				</div>
	 				</div>
	 					<div class="tonDiv3" id="tonDiv3">
	 						<div class="luminosite">
		 				<?php echo	'<table class="tableau">
									<tbody>
										<tr id="ligne2">';
										while ($donnees1 = $temp->fetch()){
										    $temperature=$donnees1['temperature'];
                                            $id=$donnees1['id'];
                                            if (($nbLigne2 % $nbColonne2) ==0 && $nbLigne2 !=0) {
                                                echo '</tr><tr>';
                                                $nbLigne2 = 0;
                                            }

										?>
										<td>
										<div class="case">
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['id']?>">X</a></button><br>
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
                                   <?php $nomPiece= $bdd->query('SELECT piece.Nom FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece AND capteur.idpiece=\''.$donnees1['idpiece'].'\'');
                                         
                                            while ($donnees2 = $nomPiece->fetch()){?>
                                            
                                        <span><?php echo $donnees2['Nom'];}?></span> <br>
										<span> T° :<span id="trame"></span> </span><?php echo $temperature[0].$temperature[1].$temperature[2].','.$temperature[3].'°C'; ?>
										</div>
										</td>
					<style>
                    
                    #fenetreModale<?php echo $donnees1['id']?>
                    {
	                display: none;
	                position: fixed;
	                top:0; right:0; bottom:0; left:0;
	                background-color: rgba(0, 0, 0, 0.5);
	                z-index: 1000;}

                    #fenetreModale<?php echo $donnees1['id']?>:target
                    {
	                   display: block;
                    }
                    
                    </style>

                                            <?php $nbLigne2++;}?>
										

							<?php	echo	'</tbody>
								</table>';?>

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
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['id']?>">X</a></button>
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
										<?php $nomPiece= $bdd->query('SELECT piece.Nom FROM piece INNER JOIN capteur ON piece.ID=capteur.idpiece AND capteur.idpiece=\''.$donnees1['idpiece'].'\'');
                                         
                                            while ($donnees2 = $nomPiece->fetch()){?>
                                            
                                        <span><?php echo $donnees2['Nom'];}?></span> <br>
										<span> Présence :<span id="trame"></span> </span><?php echo $donnees1['Presence']; ?>
										</div>
										</td>
					<style>
                    
                    #fenetreModale<?php echo $donnees1['id']?>
                    {
	                display: none;
	                position: fixed;
	                top:0; right:0; bottom:0; left:0;
	                background-color: rgba(0, 0, 0, 0.5);
	                z-index: 1000;}

                    #fenetreModale<?php echo $donnees1['id']?>:target
                    {
	                   display: block;
                    }
                    
                    </style>
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
	 							<table class="tableau" border="1">
									<tbody>
										<tr id="ligne1">
										

										 <td><a href="index.php?cible=ajoutActionneur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>

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
										 <td><a href="index.php?cible=ajoutActionneur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
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
<script rel="script" src="Controleur/JS/trames.js"></script>




</body>
</html>