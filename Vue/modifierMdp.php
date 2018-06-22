<!DOCTYPE html>
<html>
    <head>
        <title>Modifie</title>
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <link rel="stylesheet" href="Vue/CSS/mdp.css">
        <meta charset="utf-8" />
    </head>
 <body >

 			<header>
            <?php include("Vue/header.php") ?>
        	</header>

 		<div class="bloc">

 			<h1>Modifier votre mot de passe</h1>
 		
		 	<form method="post" action="index.php?cible=modifierMdp2" onsubmit="return verifMDP()">
		 		<table>
		 			<tr>
				       <td>Mot de passe actuel</td>
				       <td><input id="mdpA"  class="text" type="text" name="mdpA"/></td>
				   </tr>
				   <tr>
				       <td>Nouveau mot de passe</td>
				       <td><input id="mdp1"  class="text" type="password" name="mdp1"/></td>
				   </tr>

				   <tr>
				       <td>Confirmer nouveau mot de passe</td>
				       <td><input id="mdp2"  class="text" type="password" name="mdp2"/></td>
				   </tr>

				</table>

				<br>

				<input class="valider" type="submit" value="VALIDER" name="modifier">

				<br><br>

			</form>

			
		</div>
			<footer>
            <?php include("Vue/footer.php") ?>
        	</footer>
 </body>

</html>
