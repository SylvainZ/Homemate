<!DOCTYPE html>
<html>
<head>
    <title>Personnalisation ACCUEIL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylePersoAccueil.css">
</head>

<body>
	<h1> Personnalisation de la page d'accueil</h1>
	<section class="bigbloc">

		<div class="bloc1">
			<form method="post" action="../index.php?cible=ajoutLienImagesBDD">

			<h1 style="color:white;"> Choisissez les images à affichées à la page d'accueil :</h1>

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
		</div>

		<div class="bloc2">
			<img src="images/images.jpg">
			<img src="images/maison.jpg">
			<img src="images/mais.jpg">
			<img src="images/tele.jpg">
			<img src="images/ori.jpg">
		</div>

	</section>

</body>