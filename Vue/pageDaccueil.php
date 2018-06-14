<!DOCTYPE html>
<html>
    <head>
        <title>HOMEMATE</title>
        <link rel="stylesheet" href="Vue/CSS/pageDacceuil.css">
        <link rel="stylesheet" href="Vue/CSS/header.css">
        <link rel="stylesheet" href="Vue/CSS/footer.css">
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <meta charset="utf-8" />


    </head>

    <body >

        <header>
            <?php include("Vue/header.php") ?>

        </header>

        <div id="page">
        <div class="titre">BIENVENUE CHEZ HOMEMATE</div>

        <br/><br/>

        <section>

            <div class="block1"><img class="images" src="<?php echo'Vue/images/'.$chemin1?>"></div>
            <div class="block1"><img class="images" src="<?php echo'Vue/images/'.$chemin2?>"></div>
            <div class="block3"><img class="images3" src="<?php echo'Vue/images/'.$chemin3?>"></div>
            <div class="block3"><img class="images3" src="<?php echo'Vue/images/'.$chemin4?>"></div>
            <div class="block3"><img class="images3" src="<?php echo'Vue/images/'.$chemin5?>"></div>
            <br/>

        </section>
        </div>
        <br/> <br/>

        <footer>
            <?php include("Vue/footer.php") ?>
        </footer>

    </body>
</html>