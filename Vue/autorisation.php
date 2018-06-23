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

        <h2>Liste des utilisateurs secondaires</h2>

        <table>

            <!--affiche la liste des utilisateurs-->
                <?php
                    $flag=true;
                    $i=0;

                    //vérifie l'existence des tableaux à afficher
                    if (isset($_SESSION['nomA']) && isset($_SESSION['prenomA'])) {
                        while($flag) {
                            echo '<tr>';
                            //vérifie l'existence des variables à afficher
                            if (isset($_SESSION['nomA'][$i]) && isset($_SESSION['prenomA'][$i])) {

                                //affiche les noms et prénom des utilisateurs secondaires
                                echo '<td>'.$_SESSION['nomA'][$i]. ' </td> ';
                                echo '<td>'.$_SESSION['prenomA'][$i]. '</td>';

                                //boutton qui permet de modifier les autorisations d'un user secondaire
                                echo '<td><a href="index.php?cible=gererUserSec&action=modifier&ind='.$i.'" ><input type=button value="Modifier"/></a></td> ';

                                //boutton qui permet de supprimer un user secondaire
                                echo '<td><a href="index.php?cible=gererUserSec&action=supprimer&ind='.$i.'" ><input type=button value="Supprimer"/></a></td> ';
                                echo '</tr>';

                                $i++;
                            }

                            //sort de la boucle lorsqu'on a parcouru tout le tableau
                            else{
                                $flag=false;
                            }
                        }
                    } ?>

        </table>

        <!--boutton permettant d'ajouter un nouvel utilisateur secondaire -->
        <a href="index.php?cible=creerUnCompte"><input type="button" value="Ajouter un utilisateur secondaire"/></a>


        <footer>
            <?php include("Vue/footer.php") ?>
        </footer>

    </body>
</html>



