
<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
$habitation = $bdd->query('SELECT * FROM logement WHERE IdUser = \''.$_SESSION['ID'].'\'\'1\'');

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

	
	
	<div class = "entete">
	<button class="A active"><p>Habitation(s)</p></button>
	<button class="B"><a class="styleEntete" href="index.php?cible=capteurActionneursHabitations"><p>Capteurs/</br>Actionneurs</p></a></button>
	</div>
	
	<table class="tableau">
		<tbody>
			<tr id="ligne1">
                <?php
                while ($donnees1 = $habitation->fetch()){
                    ?>
                    <td>
                        <div class="case">
                            <span> </span><?php
                            if ($donnees1['Type']=='appartement')
                            {?>
                                <img class="styleHabitation" src="Vue/images/appart.png" alt="image appartement">
                            <?php
                            }
                            elseif ($donnees1['Type']=='maison')
                            {?>
                                <img class="styleHabitation" src="Vue/images/maison.png" alt="image maison" height="112">
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
                <?php }?>
                <td><a href="index.php?cible=ajouterLogement"><input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>
			</tr>
		</tbody>
	</table>
	
	
   	
   	<footer>
            <?php include("Vue/footer.php") ?>
    </footer>
   
	<!--<script>
	function ajouterLigne(id)
	{
	var tableau = document.getElementById(id);

	var ligne = document.getElementById(id);//on a ajout� une ligne

	var colonne1 = ligne.insertCell(0);//on a une ajout� une cellule
	//colonne1.innerHTML += document.getElementById("titre").value;//on y met le contenu de titre
	
	//document.location.href='test.html';
	}
	
	</script>-->

</body>

</html>