
<?php


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if(isset($_GET['ID'])){
    $id=$_GET['ID'];
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
	<title>Habitations</title>
	<link rel="stylesheet" href="Vue/CSS/capteur.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>

	<header>
			<?php include("header.php") ?>
	</header>
<div id="page">
	<div id="global"><div id="grandmenu">
	<div class="menu"> <!--bouton 1 et background-->

		<button id="bouton" onclick="javascript:afficher_cacher('tonDiv1');">Capteurs</button>

			<div class="tonDiv1" id="tonDiv1">
				<div class="couleur1">
					<button class="marche" id="bouton_tonDiv2" onclick="javascript:afficher_cacher('tonDiv2');">Luminosit�</button>
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
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale">X</a></button>
                                            <img class="styleCapteur" src="Vue/images/luminosité.png" alt="image capteur de luminosité" height="50px" width="30px">

                                            <div id="fenetreModale">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer ce capteur ?</h3>
                                                    <div class="annulerSupprimer">
                                                    <form method="post" action="index.php?cible=supprimerCapteurActionneur&id=<?php echo $donnees1['id']?>">
                                                        <input type="submit" value="Supprimer" class="boutonSup">
                                                    </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <span><?php echo $donnees1['piece']?></span> <br>
										<span> Luminosité : </span><?php echo $donnees1['Luminosite']; ?>
										</div>
										</td>

										<?php }?>


										 <td><a href="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td> 

										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class="couleur1">
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tonDiv3');">Temp�rature</button>
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
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale2">X</a></button><br>
                                            <img class="styleCapteur" src="Vue/images/temperature.png" alt="image capteur temperature" height="50px" width="50px">

                                            <div id="fenetreModale2">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer ce capteur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <a href="index.php?cible=supprimerCapteurActionneur&id=<?php echo $donnees1['id']?>">
                                                            <button class="boutonSup">Supprimer</button></a>

                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <span><?php echo $donnees1['piece']?></span> <br>
										<span> Température : </span><?php echo $donnees1['temperature']; ?>
										</div>
										</td>
										<?php }?>
										<td><a href="index.php?cible=ajouterUnCapteur&ID=<?php echo $_GET['ID']?>"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class="couleur1">
					<button id="bouton_tonDiv4" onclick="javascript:afficher_cacher('tonDiv4');">D�tecteur de mouvement</button>
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
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale3">X</a></button>
                                            <img class="styleCapteur" src="Vue/images/presence.png" alt="image capteur de presence" height="50px">
                                            <div id="fenetreModale3">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer ce capteur ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <form method="post" action="index.php?cible=supprimerCapteurActionneur&id=<?php echo $donnees1['id']?>">
                                                            <input type="submit" value="Supprimer" class="boutonSup">
                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>


                                            <span><?php echo $donnees1['piece']?> </span><br>
										<span> Présence : </span><?php echo $donnees1['Presence']; ?>
										</div>
										</td>
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

		<button id="bouton" onclick="javascript:afficher_cacher('tondiv1');">Actionneurs</button>

			<div class="tondiv1" id="tondiv1">
				<div class="couleur1">
					<button id="bouton_tonDiv2" onclick="javascript:afficher_cacher('tondiv2');">Lumi�re</button>
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
										<div class="case">
                                            <button class="supprimer"><a class="boutonSupprimer" href="#fenetreModale3">X</a></button>
                                            <?php if($donnees1['Etat']==1){?>
                                            
                                            <a href="index.php?cible=modifierActionneur&etat=0&ID=<?php echo $_GET['ID']?>&id=<?php echo $donnees1['ID']?>"><img class="styleCapteur" src="Vue/images/marche.png" alt="image interrupteur" height="50px"></a>
                                            
                                            <?php }
                                            else {?>
                                            
                                             <a href="index.php?cible=modifierActionneur&etat=1&ID=<?php echo $_GET['ID']?>&id=<?php echo $donnees1['ID']?>"><img class="styleCapteur" src="Vue/images/arret.png" alt="image interrupteur" height="50px"></a>
                                                
                                            <?php }?>
                                            <div id="fenetreModale3">
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


                                            <span><?php echo $donnees1['nom']?> </span><br>
										
										</div>
										</td>
										<?php }?>

										 <td><a href="index.php?cible=ajoutActionneur&ID=<?php echo $_GET['ID']?>""> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>

										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>
				<div class="couleur1">
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tondiv3');">Volets</button>
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
   	
   	 <footer>
			<?php include("footer.php"); ?>
    </footer>
    


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
</html>