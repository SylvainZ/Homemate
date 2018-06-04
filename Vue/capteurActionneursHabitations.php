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
	<link rel="stylesheet" href="Vue/CSS/capteurActionneursHabitation.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
    <link rel="stylesheet" href="Vue/CSS/header.css">
    <link rel="stylesheet" href="Vue/CSS/footer.css">
</head>

<body>

    <header>
        <?php include("Vue/header.php") ?>
    </header>

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
					<button id="bouton_tonDiv2" class="marche" onclick="javascript:afficher_cacher('tonDiv2');">Luminosit�</button>
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
	 				<button id="bouton_tonDiv3" onclick="javascript:afficher_cacher('tonDiv3');">Temp�rature</button>
	 					<div id="tonDiv3" class="tonDiv3">
	 						<div class="luminosite">
		 						<table class="tableau" border="1">
									<tbody>
										<tr id="ligne2">
										<?php 
										while ($donnees = $temp->fetch()){
										?>
										
										<td>
										<?php echo $donnees['nom'].'<span> Dans la </span>'.$donnees['piece'].' <span>, il fait </span>'.$donnees['temperature'].'<span> �C</span>'; ?>
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
					<button id="bouton_tonDiv4" onclick="javascript:afficher_cacher('tonDiv4');">D�tecteur de mouvement</button>
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
					<button id="bouton2">Lumi�re</button>
	 					<div id="tondiv2"><ul> <li> Pi�ce1 </li><li> Pi�ce2 </li><li> Pi�ce3 </li></ul></div>
	 				<button id="bouton3">Volets</button>
	 					<div id="tondiv3"><ul> <li> Pi�ce1 </li><li> Pi�ce2 </li><li> Pi�ce3 </li></ul></div>
					
	 	 	</div>	
   	</div>


    <footer>
        <?php include("Vue/footer.php") ?>
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





<footer>Copyright 2018 HomeMate, All Rights Reserved</footer>
</body>
</html>