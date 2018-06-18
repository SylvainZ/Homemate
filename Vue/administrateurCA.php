<!DOCTYPE html>
<html>
<head>
    <title>Administrateur - Capteur/Actionneur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Vue/CSS/styleAdminCA.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
<?php
	try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
		        die('Erreur : '.$e->getMessage());
		}
		// Si tout va bien, on peut continuer
		$reponse_capteur = $bdd->query('SELECT * FROM capteur');
?>
</head>

<body>

    <header>
        <?php include("Vue/header.php") ?>
    </header>

	<section id="blocs">
		<div class="image" >
			<img class="homemate" src="Vue/images/logo_nouvo.png">
			<img class="profil" src="Vue/images/iconeProfil.png">
		</div>

		<div class="tete">
			<ul>
				<li class="decoration"><span class="padding">
				<a href="index.php?cible=controleUser">
                    Comptes Utilisateurs</a></span></p></li>
                <li class="decoration" id="blue"><span class="padding"><a href="index.php?cible=controleCapteur">Capteurs/Actionneurs</a></span></p></li>
                <li class="decoration"><span class="padding"><a href="index.php?cible=controlePerso">Personnalisation du site</a></span></p></li>
			</ul>
		</div>
	</section>

    <section class="big">
        <div class="bloc2">
            <h1 >Voici les capteurs :</h1>
            <ul class="decalage">


                <?php
                while ($donnees = $reponse_capteur->fetch())
                {
                    ?>
                    <li class="decoliste">
                        <?php echo $donnees['type'];?>
                        <?php echo $donnees['nom']?>
                        <form action="index.php?cible=controleCapteur&id=<?php echo $donnees['id']?>" method="POST" class="position">
                            <input type="text" name="modification" style= "width:10vw;"><br/>
                            <input type="submit" value="Modfier type" class="bouton">
                        </form>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="bloc2">
            <h1>Ajouter des capteurs ou des actionneurs : </h1>
            <p>Ajouter un capteur :</p>
            <form action="index.php?cible=controleCapteur" method="POST">
                Type : <select name="ajoutCapteur" >
                    <option value="Température">Température</option>
                    <option value="Présence">Présence</option>
                    <option value="Luminosité">Luminosité</option>
                </select>
                <input type="submit" value="Ajouter" class="bouton">

                <p>Ajouter un actionneur : </p>
                Type : <select name="ajoutActionneur" >
                    <option value="Volet">Moteur volet</option>
                    <option value="Interrupteur">Interrupteur</option>
                </select>
                <input type="submit" value="Ajouter" class="bouton">
            </form>
        </div>
    </section>

    <section>
        <div class="page">
            <?php include("Vue/footer.php") ?>
        </div>
    </section>




</body>
</html>
