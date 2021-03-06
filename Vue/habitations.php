<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$habitation = $bdd->query('SELECT * FROM logement WHERE IdUser = \''.$_SESSION['ID'].'\'');

$nbLigne=0;
$nbColonne=5;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Habitations</title>
	<link rel="stylesheet" href="Vue/CSS/habitations.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>

	<header>
			<?php include("header.php") ?>
	</header>
	

	<div id="page">
	
	<div class = "entete">
	<button class="A active"><p>Habitation(s)</p></button>
	<button class="B"><a class="styleEntete" href="index.php?cible=capteurActionneursHabitations"><p>Capteurs/</br>Actionneurs</p></a></button>
	</div>
	
<?php echo 	'<table class="tableau">
		<tbody>
			<tr id="ligne1">';
                while ($donnees1 = $habitation->fetch()){
                    /*permet de mettre à la ligne l'image quand il y a nbcolonne images*/
                    if (($nbLigne % $nbColonne) ==0 && $nbLigne !=0) {
                        echo '</tr><tr>';
                        $nbLigne = 0;
                    }

                    ?>
	                  <td id="colonneLogement">
                        <div class="case">
                            <div id="supModif">
                            <!-- bouton supprimer et modifier -->
                            <button class="supprimerlog"><a class="boutonSupprimerlog" href="#fenetreModale<?php echo $donnees1['ID']?>">X</a></button>
                            <div class="posParametre"><a href="#fenetreModaleBis<?php echo $donnees1['ID']?>"><img class="parametre" src="Vue/images/parametre.png" alt="image parametre"></a></div>
                            </div>
                            <!-- affiche le pop up quand on clique sur le bouton supprimerlog -->
                            <div id="fenetreModale<?php echo $donnees1['ID']?>">
                                <div class="popup-block">
                                    <h3>Voulez-vous vraiment supprimer ce logement ?</h3>
                                    <div class="annulerSupprimer">
                                        <form method="post" action="index.php?cible=supprimerLogement&ID=<?php echo $donnees1['ID']?>">
                                            <input type="submit" value="Supprimer" class="boutonSup">
                                        </form>
                                        <a class="annuler" href="#en-tete"><button class="annuler">Annuler</button></a>
                                    </div>
                                </div>
                            </div>
							 <!-- affiche le pop up quand on clique sur le bouton posParametre -->
                            <div id="fenetreModaleBis<?php echo $donnees1['ID']?>">
                                <div class="popup-block">
                                    <h3 class="log modiflog">Modification du logement</h3>

                                    <div class="logement">

                                        <form class="form1 form2" method="post"  action="index.php?cible=modifLogement&ID=<?php echo $donnees1['ID']?>">
                                        <div class="form2">
                                            <div class="champnom ligne3">
                                                <label for="piece" class="inputNom">Nombre de pièces</label><br>
                                                <input type="text" name="piece" id="piece" value="<?php echo $donnees1['NombrePiece']?>"/>
                                            </div>

                                            <div class="champnom ligne3 colonne2">
                                                <label for="superficie" class="inputNom">Superficie</label><br>
                                                <input type="text" name="superficie" id="superficie" value="<?php echo $donnees1['Superficie']?>"/>
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
                            
                            <!-- afficher les image en fonction des types -->
                            <?php
                            if ($donnees1['Type']=='appartement')
                            {?>
                               <a href ="index.php?cible=piece&ID=<?php echo $donnees1['ID']?>"> <img class="styleHabitation" src="Vue/images/appart.png" alt="image appartement" height="100"></a>
                            <?php
                            }
                            elseif ($donnees1['Type']=='maison')
                            {?>
                              <a href ="index.php?cible=piece&ID=<?php echo $donnees1['ID']?>">  <img class="styleHabitation" src="Vue/images/maison.png" alt="image maison" height="100"></a>
                            <?php
                            }
                            ?>
                                <br>
                            <div class="info">
                            <span><?php echo $donnees1['Adresse']?></span><br>
                            <span> Nombre de Pièce : </span><?php echo $donnees1['NombrePiece']?> <br>
                            <span> Surface : </span><?php echo $donnees1['Superficie']; ?> <span>m²</span>
 
                            </div>
                        </div>
                    </td>
                    
                    <!-- afficher les fenetres-popups avec du css et non javascript -->
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
                <td><a href="index.php?cible=ajouterLogement"><input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>

     <?php echo '</tr>
		</tbody>
	</table>';?>
	
    </div>
   	

            <?php include("Vue/footer.php") ?>



</body>

</html>