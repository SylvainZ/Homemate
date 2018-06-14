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
<header>
    <?php include("Vue/header.php") ?>
</header>

<div id="page">

    <h1>Personnaliser la FAQ !</h1>
    <section class="question">

    			<span class="tout">Toutes les réponses à vos questions : <span><br/>
                        <ul>
                            <?php
                            while ($donnees = $reponse->fetch())
                            {
                                ?>
                            <li>
                                <form action="index.php?cible=controlefaqAdmin&id=<?php echo $donnees['ID']?>" method="POST">
                                    <input type="submit" value="Supprimer" id="supprimer" name="supprimer" class="valider">
                                </form>
                            <?php echo $donnees['question']; ?></li>
                            <?php echo $donnees['reponse']; ?>



                            <form action="index.php?cible=controlefaqAdmin&id=<?php echo $donnees['ID']?>" method="POST">
                                Modifier question :
                                <input type="text" name="modifquestion" style= "width:13vw;" >
                                 <input type="submit" value="Modifier" class="valider">
                            </form>
                            <form action="index.php?cible=controlefaqAdmin&id=<?php echo $donnees['ID']?>" method="POST">
                                Modifier reponse :
                                <input type="text" name="modifreponse" style= "width:13vw;">
                                <input type="submit" value="Modifier" class="valider">
                            </form>


                            <?php
                        }
                        ?>
                        </ul>
        <form action="index.php?cible=controlefaqAdmin" method="POST">
            Entrez question :
            <input type="text" name="question" style= "width:10vw;"/><br/>
            Entrez réponse :
            <input type="text" name="reponse" style= "width:10vw;"/>
            <input type="submit" value="Ajouter" class="valider"/>
	    </form>
    </section>
</div>
<?php include("footer.php") ?>
</body>
</html>

