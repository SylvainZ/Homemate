<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Vue/CSS/autorisation.css" />
        <link rel="stylesheet" href="Vue/CSS/all.css" />

        <title>Autorisations</title>
    </head>
    <body>
        <header>
            <?php include("Vue/header.php") ?>
        </header>

        <h1>Gérer les autorisations</h1>
    <div id="cadre">
        <h2>Liste des utilisateurs secondaires</h2>

        <table>
            <div id="aligne">
            <!--affiche la liste des utilisateurs-->
                <?php
                    $flag=true;
                    $i=0;

                    //vérifie l'existence des tableaux à afficher
                    if (isset($_SESSION['nomA']) && isset($_SESSION['prenomA'])) {
                        while($flag) {
                            echo '<div class="fond">';

                            //vérifie l'existence des variables à afficher
                            if (isset($_SESSION['nomA'][$i]) && isset($_SESSION['prenomA'][$i])) {
                                echo '<tr>';
                                //affiche les noms et prénom des utilisateurs secondaires
                                echo '<td width="30%"><div class="nomA">'.$_SESSION['nomA'][$i]. '</div> </td> ';
                                echo '<td width="30%"><div class="prenomA">'.$_SESSION['prenomA'][$i]. '</div></td>';

                                //boutton qui permet de modifier les autorisations d'un user secondaire
                                echo '<td width="30%"><div class="clique"><a href="index.php?cible=gererUserSec&action=modifier&ind='.$i.'" ><input type=button value="Modifier" class="bouton"/></a></div></td> ';

                                //boutton qui permet de supprimer un user secondaire
                                echo '<td width="30%"><div><a href="index.php?cible=gererUserSec&action=supprimer&ind='.$i.'" ><input type=button value="Supprimer" class="bouton"/></a></div></td> ';
                                echo '</tr>';   
                                $i++;
                                echo '</div>';
                            }

                            //sort de la boucle lorsqu'on a parcouru tout le tableau
                            else{
                                $flag=false;
                            }
                        }
                    } ?>
            </div>
        </table><br/>

        <!--boutton permettant d'ajouter un nouvel utilisateur secondaire -->
        <span class="ajouter">
            <a href="index.php?cible=creerUnCompte"><input type="button" value="Ajouter un utilisateur secondaire" class="bouton"/></a>
        </span>
    </div>

        <footer>
            <?php include("Vue/footer.php") ?>
        </footer>

    </body>
</html>



