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
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Habitations</title>
	<link rel="stylesheet" href="Vue/CSS/piece.css">
	<link rel="stylesheet" href="Vue/CSS/all.css">
</head>

<body>

	<header>
			<?php include("header.php") ?>
	</header>
	
	<table class="tableau">
		<tbody>
			<tr id="ligne1">
                <?php
                while ($donnees1 = $piece->fetch()){
                    ?>
	                  <td>
                        <div class="case">
                            <span> </span><?php
                            
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
                <?php }?>
                <td><a href="index.php?cible=ajoutPiece&ID=<?php echo $id?>"><input type="button" name="bu" id="bu" value="+" class="bouton1"></a></td>
			</tr>
		</tbody>
	</table>
	
	
	
        
	
	
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
  </body>



</html>