
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Boîte de réception</title>
        <link rel="stylesheet" href="Vue/CSS/styleBoiteMail.css" />
        <link rel="stylesheet" href="Vue/CSS/all.css" />

        
    </head>

    <body>
		<!--Mise en place de la barre de conexion-->
		<header>
			<?php include("header.php") ?>
		</header>

    	<!--Logo
    		<img src="images/homemate2.png" alt="logo HomeMate" id="logo"/>-->

    	<h1>Bienvenue sur votre boîte de réception !</h1>

    	<!--Positionnement menu et liste des messages-->
    	<div class="listeMessage">
    		<!--Menu-->
	    	<section class="menu">
	    		<p>
		    		<a href="index.php?cible=messagerie"><input type="button" value="Nouveau message" class="nouveau"/></a>
		    		<div><a href="index.php?cible=boiteMailReception" class="liste">Liste des messages</a></div><br/>
		    		<div><a href="index.php?cible=corbeilleRecherche" class="corbeille">Corbeille</a></div>
	    		</p>
	    	</section>

	    	<!--Liste des messages-->
	    	<section class="rectangle">
	    		<!--Début du formulaire-->
	    		<form action="index.php?cible=gestionBoiteMail" method="post" name="F1">
	    			<p>
		    			<!--En-tête du bloc Liste des messages-->
						<div class="debut">
							<h2>Liste des messages</h2>
							<section class="option">
								<label for="selection">Pour la sélection : </label>
									<input type='submit'>
										<select name="selection" id="selection">
											<option value="lu">Marquer comme lus</option>
											<option value="non_lu">Marquer comme non lus</option>
											<option value="supprimer">Supprimer</option>
										</select><br/>
									</input>
							</section>
						</div>
			    		
			    		<!--<label for="tout">Tout sélectionner</label>-->

			    		<!--En-tête (Sujet, Expéditeur,Date)-->
			    		<div class="en_tete">
			    			<!--Trouver le numéro d'élément de l'input ci-dessous pour pouvoir cocher toutes les cases-->
			   				<input id="coche" type="checkbox" value="Tout cocher" title="Tout sélectionner" onclick="return cocher(this);"/>

			   				<span>Sujet</span>
			   				<span>Expéditeur</span>
			   				<span>Date</span>
		    			</div>


		    			<!--Affichage des messages de la bdd-->
			    		<div class="rectanglebis">
							
		<?php
							/*Partie qui affiche les messages stockés dans la session ouverte
							10 messages par page*/
								
								
							for ($i = 0; $i < 10; $i++){
								/*Vérification de l'existence des variables*/
								if (isset($_SESSION['sujet'][$i])&& isset($_SESSION['expediteur'][$i])&&isset($_SESSION['date'][$i])){
									if($_SESSION['corbeille'][$i]==0){
										/*Ligne d'un message*/
										echo '<div class="message">';

											echo '<input type="checkbox" class="messagecheck" name="'.$i.'"/>
											<a href="index.php?cible=pageMessage&message='.$i.'">
												<span class="messageIndSujet">'.$_SESSION['sujet'][$i].'</span> </a>
											<a href="index.php?cible=pageMessage&message='.$i.'">	
												<span class="messageIndExp">'.$_SESSION['expediteur'][$i].'</span></a>
											<a href="index.php?cible=pageMessage&message='.$i.'">	
												<span class="messageIndDate">'.$_SESSION['date'][$i].'</span></a>
											</a>';
										echo '</div>';
									}
								}
							}
							
																					
		?>				
						
					
				    			<!-- commentaire : changer de page -->
				    			<div class="page">Pages: 1</div>
			    			</div>	
			    		</p>
	    		</form>
	    	</section>
	    </div>

	    



    	<footer>
    		<?php include("footer.php") ?>
    	</footer>

		<script type="text/javascript" src="Controleur/JS/cocher.js"></script>
    </body>
</html>