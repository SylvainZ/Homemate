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
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Capteurs/Actionneurs</title>

	<title>G�rer la maison</title>

	<link href="Vue/CSS/capteurActionneursHabitation.css" rel="stylesheet">
	<link href="Vue/CSS/all.css" rel="stylesheet">
</head>

<body>

	<header>
			<?php include("header.php"); ?>
	</header>
	

	
	
	<div class="entete">
    <button class="A"><a href="index.php?cible=logement" class="styleEntete"><p>Habitation(s)</p></a></button>
    <button class="B active"><p>Capteurs/<br>Actionneurs</p></button>
</div>
	<div id="grandmenu">
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
										?>
										<td>
										<div class="case">
										<span> Nom : </span><?php echo $donnees1['nom']?><br>
										<span> Pièce : </span><?php echo $donnees1['piece']?> <br>
										<span> Luminosité : </span><?php echo $donnees1['Luminosite']; ?>
										</div>
										</td>
										<?php }?>
										
										
										 <td id="case"><a href="index.php?cible=ajouterUnCapteur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>

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
										?>
										<td>
										<div class="case">
										<span> Nom : </span><?php echo $donnees1['nom']?><br>
										<span> Pièce : </span><?php echo $donnees1['piece']?> <br>
										<span> Température : </span><?php echo $donnees1['temperature']; ?>
										</div>
										</td>
										<?php }?>
										<td><a href="index.php?cible=ajouterUnCapteur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
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
										?>
										<td>
										<div class="case">
										<span> Nom : </span><?php echo $donnees1['nom']?><br>
										<span> Pièce : </span><?php echo $donnees1['piece']?> <br>
										<span> Présence : </span><?php echo $donnees1['Presence']; ?>
										</div>
										</td>
										<?php }?>
										
											<td><a href="index.php?cible=ajouterUnCapteur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
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
										

										 <td><a href="index.php?cible=ajouterUnCapteur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>

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
																					 <td><a href="index.php?cible=ajouterUnCapteur"> <input name="bu" class="bouton1" id="bu" type="button" value="+"></a></td>
										</tr>
									</tbody>
								</table>
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

	var ligne = document.getElementById(id);//on a ajout� une ligne

	var colonne1 = ligne.insertCell(0);//on a une ajout� une cellule
	//colonne1.innerHTML += document.getElementById("titre").value;//on y met le contenu de titre
	
	//document.location.href='test.html';
	}
	
	</script>
	
	-->




</body>
</html>