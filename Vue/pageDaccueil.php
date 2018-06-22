<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Vue/CSS/acc.css"/>
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

            <table>
                <tr>
                    <td>
                        <div class="titre">
                            <h1>Bienvenue chez HOMEMATE</h1>

                        </div>
                            <br>
                        <div class="titre2">
                            <img class="images2" src="<?php echo'Vue/images/'.$chemin1?>">
                        </div>
                            <br>
                        <div class="titre">
                            <h1>Nos Capteurs/Actionneurs</h1>
                        </div>
                            <br>
                        <div class="titre4">
                            <div>
                            <img class="image" src="Vue/images/micro.jpg"><br/><br/><br/><br/><br/><br/>
                            <p>
                                Ceci est le capteur sonore, c'est un microphone à électret. Son prix varie aux alentours de 1€.
                            </p>
                            </div>
                            <div>
                            <img class="image" src="Vue/images/capteurMouvement.png"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            <p>
                                Ceci est un capteur de distance à infrarouge, son prix varie entre 3 et 4€.
                            </p>
                            </div>
                            <div>
                            <img class="image" src="Vue/images/moteur.jpg"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            <p>
                                Ceci est un moteur à courant continu avec réducteur, son prix varie entre 3 et 8€.
                            </p>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="titre3">
                            <span class="ecriture">Adresse :</span> <br><br>
                            <span class="ecriture2">10 rue de Vanves </span> <br>
                            <span class="ecriture2">Issy les Moulinaux</span> <br>
                            <span class="ecriture2">92130</span> <br>
                            <span class="ecriture2">France</span> <br><br>
                            <span class="ecriture">Contacts :</span> <br><br>
                            <span class="ecriture2">-Numéro de téléphone </span> <br>
                            <span class="ecriture3"> 06 45 67 23 90 </span> <br>
                            <span class="ecriture2">-Email </span> <br>
                            <span class="ecriture3"> domisep@isep.fr </span> <br><br>
                        </div>
                        <br/>
                        <div class="titre3">

                            <img class="images3" src="<?php echo'Vue/images/'.$chemin2?>">
                        </div>
                    </td>
                </tr>
            </table>




        <footer>
            <?php include("Vue/footer.php") ?>
        </footer>

    </body>
</html>
