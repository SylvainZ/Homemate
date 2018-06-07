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
    $piece = $bdd->query('SELECT * FROM logement WHERE ID =\''.$_GET['ID'].'\'');
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
	
<?php 
    while($donnees = $piece->fetch()){
	 for($i=1;$i<=$donnees['NombrePiece'];$i++){  
	     $y=$i+1;?>
	     <div class="menu"> <!--bouton 1 et background-->

		<button class="Bouton" onclick="javascript:afficher_cacher('tonDiv1');"><?php echo 'Piece '.$i.''?></button>

			<div class="tonDiv1" id="tonDiv<?php echo ".$i."?>">
				<div class="couleur1">
						<div class="tonDiv2" id="tonDiv<?php echo ".$y."?>">
							<div class="luminosite">
	 							<span>nhdfhndf</span>
							</div>
						</div>
				</div>
			</div>
		</div>
		<?php }}?>
	
	
	
        
	
	
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