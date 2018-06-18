<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>FAQ</title>
        <link rel="stylesheet" href="Vue/CSS/styleFaq.css" />
        <link rel="stylesheet" href="Vue/CSS/all.css" />
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

        // On récupère tout le contenu de la table jeux_video
        $reponse = $bdd->query('SELECT * FROM faq ');

        ?>
    </head>

    <body>
        <!--Mise en place de la barre de conexion-->
        <header>
            <?php include("header.php") ?>
        </header>

<div id="page">

    	<h1>Bienvenue sur la FAQ !</h1>
    	<section class="question">
    		<p>
    			<span class="tout">Toutes les réponses à vos questions : <span><br/>
    			<ul>
                    <?php
                    while ($donnees = $reponse->fetch())
                    {
                    ?>
                    <li class="color"><?php echo $donnees['question']; ?></li>
                    <?php echo $donnees['reponse']; ?>
                    <?php }
                    ?>
    			</ul>
<form action="index.php?cible=controlefaqAdmin" method="POST">
            Entrez question :
            <input type="text" name="question" style= "width:10vw;"/>
            <input type="submit" value="Ajouter" class="valider"/>
</form>
    		<p>

    	</section>
</div>

            <?php include("footer.php") ?>


    </body>
</html>	

