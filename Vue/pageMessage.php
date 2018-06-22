
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Message</title>
	    <link rel="stylesheet" href="Vue/CSS/miseEnPageMessage.css" />
	    <link rel="stylesheet" href="Vue/CSS/all.css" />
    </head>
	
	 <body >
	 		<!--Mise en place de la barre de connexion-->
		<header>
			<?php include("header.php"); ?>
		</header>
            <!--Début de la page de Message -->
            <div id="page">
			<h2>Message</h2>
			<div class="case">	
				<div class="positionColonne">		
					<div class="zoneExpediteur">
					
						<span class="margeGauche">De : 
						<?php
						echo $_SESSION['expediteur'][$_GET['message']];
						?>
						</span>
					</div>
					
					<div class="zoneDate">
						<span class="margeGauche">Date:
                        <?php
                        echo $_SESSION['date'][$_GET['message']];
                        ?> </span>
					</div>
				</div>
				
				<div class="zoneReception">
					<span class="margeGauche">à :
	<?php
	echo $_SESSION['reception'][$_GET['message']];
	?></span>
				</div>
				<br/>
				<div class="zoneMessage">
					<p>
					<?php
	echo $_SESSION['message'][$_GET['message']];
	?>
					</p>
				</div>
				
			</div>
            </div>
			<br/>

            <a href="index.php?cible=messagerie"><input type="button" value="Répondre" class="Repondre"/></a>


<?php include('Vue/footer.php');?>

	 </body>

</html>