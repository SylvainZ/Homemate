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
    $piece = $bdd->query('SELECT * FROM piece WHERE ID_logement =\''.$_GET['ID'].'\'');
    $nombrePiece = $bdd->query('SELECT NombrePiece FROM logement WHERE ID ='.$_GET['ID']);
    

}
$nbLigne=0;
$nbColonne=7;


?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Logement</title>
	<link rel="stylesheet" href="Vue/CSS/piece.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>

	<header>
			<?php include("header.php") ?>
	</header>
	
	
	
	
	
	

	<div id="page">
		<div class="adresse">
        	
        	<?php 
        	$logement = $bdd->query('SELECT * FROM logement WHERE ID =\''.$_GET['ID'].'\'');
        	while ($donnees1 = $logement->fetch()){
        	    
        	 echo $donnees1['Adresse'].' '.  $donnees1['Ville'] .' '.  $donnees1['CodePostal'];
        	    
        	} ?>
        	       
        	
        </div>
        <div class = "entete">
        
        
            <button class="A active"><a href="index.php?cible=logement" class="styleEntete"><p class="hab"><p>Habitation(s)</p></a></button>
            <button class="B"><a class="styleEntete" href="index.php?cible=capteurActionneursHabitations"><p>Capteurs/</br>Actionneurs</p></a></button>
        </div>
<br><br>

<?php echo 	'<table class="tableau">
		<tbody>
			<tr id="ligne1">';
                while ($donnees1 = $piece->fetch()){
                    if (($nbLigne % $nbColonne) ==0 && $nbLigne !=0) {
                        echo '</tr><tr>';
                        $nbLigne = 0;
                    }
                    ?>
	                  <td>
                        <div class="case">
                        					<div id="supModif">
                                          	<button class="supprimerlog"><a class="boutonSupprimer" href="#fenetreModale<?php echo $donnees1['ID']?>">X</a></button>
                                             <div class="posParametre"><a href="#fenetreModaleBis<?php echo $donnees1['ID']?>"><img class="parametre" src="Vue/images/parametre.png" alt="image parametre"></a></div>
                                            </div>
                                         
                                            <div id="fenetreModale<?php echo $donnees1['ID']?>">
                                                <div class="popup-block">
                                                    <h3>Voulez-vous vraiment supprimer cette pièce ?</h3>
                                                    <div class="annulerSupprimer">
                                                        <form method="post" action="index.php?cible=supprimerPiece&id=<?php echo $donnees1['ID']?>&ID=<?php echo $_GET['ID']?>">
                                                            <input type="submit" value="Supprimer" class="boutonSup">
                                                        </form>
                                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- formulaire modification -->
                                            <div id="fenetreModaleBis<?php echo $donnees1['ID']?>">
                                                <div class="popup-block">
                                                    <h3 class="log modiflog">Modification de la pièce</h3>

                                                    <div class="logement">

                                                        <form class="form1 form2" method="post"  action="index.php?cible=modifierPiece&ID=<?php echo $donnees1['ID']?>&id=<?php echo $_GET['ID']?>" onsubmit=" return verifPiece();">
                                                            <div class="form2">
                                                                <div class="champnom ligne3">
                                                                    <label for="nom" class="inputNom">Nom :</label></br>
                                                                    <input type="text" name="nom" id="nomPiece" value="<?php echo  'salle'.$donnees1['Nom']?>"/><br>
                                                                    <div id="tailleNom"></div>
                                                                    <label for="superficie" class="inputNom">Superficie :</label></br>
                                                                    <input type="number" name="superficie" id="piece" value="<?php echo $donnees1['Superficie']?>"/></br>
                                                                </div>
                                                                <br> <br>
                                                                <div class="valid">
                                                                    <input type="submit" name="valider" value="Valider" class="bouton validLogement">
																	
                                                                </div>
                                                            </div> 
                                                        </form>
                                                        <a class="annuler1" href="#en-tete"><button class="annuler">Annuler</button></a>
                                                    </div>
                                                </div>
                                            </div>
                          <?php

                            if ($donnees1['Type']=='salon')
                    {?>
                     <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>"> <img class="styleHabitation" src="Vue/images/salon.png" alt="image appartement" height="112"></a>
                        <?php
                    }
                    if ($donnees1['Type']=='salle de bain')
                    {?>
                     <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>"><img class="styleHabitation" src="Vue/images/salledebain.png" alt="image maison" height="112"></a>
                        <?php
                    }
                    ?>
                    <?php
                     if ($donnees1['Type']=='garage')
                    {?>
                      <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>"><img class="styleHabitation" src="Vue/images/garage.png" alt="image maison" height="112"></a>
                        <?php
                    }
                    ?>
                    <?php
                     if ($donnees1['Type']=='cuisine')
                    {?>
                     <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>">   <img class="styleHabitation" src="Vue/images/cuisine.png" alt="image maison" height="112"></a>
                        <?php
                    }
                    ?>
                    <?php
                     if ($donnees1['Type']=='chambre')
                    {?>
                     <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>">   <img class="styleHabitation" src="Vue/images/chambre.png" alt="image maison" height="112"></a>
                        <?php
                    }
                    ?>
                    <?php
                     if ($donnees1['Type']=='toilettes')
                    {?>
                     <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>">   <img class="styleHabitation" src="Vue/images/toilettes.png" alt="image maison" height="112"></a>
                        <?php
                    }
                    ?>
                    <?php
                     if ($donnees1['Type']=='autres')
                    {?>
                      <a href ="index.php?cible=capteur&ID=<?php echo $donnees1['ID']?>">  <img class="styleHabitation" src="Vue/images/autres.png" alt="image maison" height="112"></a>
                        <?php
                    }
                    ?>
                                <br>
                            <div class="info">
                            <span><?php echo $donnees1['Nom']?></span><br>
                            <span> Surface : </span><?php echo $donnees1['Superficie']; ?> <span>m²</span>

                            </div>
                        </div>
                    </td>
                    
                    <style>
                    
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
                    
                      <?php $nbLigne++;}?>
                
                <td><a href="index.php?cible=ajoutPiece&ID=<?php echo $id?>"><input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>
			</tr>
		</tbody>
	</table>
    </div>






            <?php include("Vue/footer.php") ?>
	<script src="Controleur/JS/piece.js" type="text/javascript"></script>

  </body>



</html>