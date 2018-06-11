<!DOCTYPE html>
<html>
<head>
    <title>Personnalisation ACCUEIL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Vue/CSS/stylePersoAccueil.css">
 
</head>

<body>
	<p class="titre"> Personnalisation de la page d'accueil</p>
	<section class="bigbloc">

		<div class="bloc1">
			<form method="post" action="index.php?cible=ajoutLienImagesBDD">

			<h1 style="color:white;"> Choisissez les images à affichées à la page d'accueil :</h1>
			<br/>

			<p> L'image de la case 1 : <select name="image1">
            	<option value="images.jpg" > image 1</option>
            	<option value="maison.jpg">image 2</option>
            	<option value="mais.jpg">image 3</option>
            	<option value="tele.jpg">image 4</option>
            	<option value="ori.jpg">image 5</option>
		    </select>

		    <p> L'image de la case 2 : <select name="image2">
            	<option value="images.jpg" > image 1</option>
            	<option value="maison.jpg">image 2</option>
            	<option value="mais.jpg">image 3</option>	 
            	<option value="tele.jpg">image 4</option>
            	<option value="ori.jpg">image 5</option>
		    </select>

		    <p> L'image de la case 3 : <select name="image3">
            	<option value="images.jpg" > image 1</option>
            	<option value="maison.jpg">image 2</option>
            	<option value="mais.jpg">image 3</option>	 
            	<option value="tele.jpg">image 4</option>
            	<option value="ori.jpg">image 5</option>
		    </select>

		    <p> L'image de la case 4 : <select name="image4">
            	<option value="images.jpg" > image 1</option>
            	<option value="maison.jpg">image 2</option>
            	<option value="mais.jpg">image 3</option>	 
            	<option value="tele.jpg">image 4</option>
            	<option value="ori.jpg">image 5</option>
		    </select>
		    <br/>
		    <input type="submit" value="Valider">
		    </form>

		    <form method="post" action="reception.php" enctype="multipart/form-data" class="uploadImage">
			    <h1 style="color:white;"> OU Upload une image personelle : </h1>
			     <label for="case1">Image case 1 :</label><br />
			     <input type="file" name="case1" id="case1"/><br />
			     <label for="case2">Image case 2 :</label><br />
			     <input type="file" name="case2"/><br/>
			     <label for="case3">Image case 3 :</label><br />
			     <input type="file" name="case3"/><br />
			     <label for="case4">Image case 4 :</label><br />
			     <input type="file" name="case4"/><br />
			     <input type="submit" value="Envoyer" />
			</form>
		
		</div>

		<div class="bloc2">
			<img src="Vue/images/images.jpg">
			<img src="Vue/images/maison.jpg">
			<img src="Vue/images/mais.jpg">
			<img src="Vue/images/tele.jpg">
			<img src="Vue/images/ori.jpg">
		</div>

	</section>

</body>
