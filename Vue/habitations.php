
<?php

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
	
	<table class="tableau" border="1">
		<tbody>
			<tr id="ligne1">
                <?php
                while ($donnees = $temp->fetch()){
                    ?>

                    <td>
                        <?php echo $donnees['nom'].'<span> Dans la </span>'.$donnees['piece'].' <span>, il fait </span>'.$donnees['temperature'].'<span> �C</span>'; ?>
                    </td>
                <?php }?>
                <td><a href="index.php?cible=ajouterLogement"><input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>
			</tr>
		</tbody>
	</table>
	
	
   	
   	<footer>
            <?php include("Vue/footer.php") ?>
    </footer>
   
	<script>
	function ajouterLigne(id)
	{
	var tableau = document.getElementById(id);

	var ligne = document.getElementById(id);//on a ajout� une ligne

	var colonne1 = ligne.insertCell(0);//on a une ajout� une cellule
	//colonne1.innerHTML += document.getElementById("titre").value;//on y met le contenu de titre
	
	//document.location.href='test.html';
	}
	
	</script>

</body>

</html>