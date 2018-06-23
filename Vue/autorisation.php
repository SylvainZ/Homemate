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

                <?php
                    $flag=true;
                    $i=0;
                    if (isset($_SESSION['nomA']) && isset($_SESSION['prenomA'])) {
                        while($flag) {
                            echo '<tr>';
                            if (isset($_SESSION['nomA'][$i]) && isset($_SESSION['prenomA'][$i])) {
                                echo '<td>'.$_SESSION['nomA'][$i]. ' </td> ';
                                echo '<td>'.$_SESSION['prenomA'][$i]. '</td>';
                                echo '<td><a href="index.php?cible=gererUserSec&action=modifier&ind='.$i.'" ><input type=button value="Modifier"/></a></td> ';
                                echo '<td><a href="index.php?cible=gererUserSec&action=supprimer&ind='.$i.'" ><input type=button value="Supprimer"/></a></td> ';
                                echo '</tr>';

                                $i++;
                            }
                            else{
                                $flag=false;
                            }
                        }
                    } ?>




        </table>

        <a href="index.php?cible=creerUnCompte"><input type="button" value="Ajouter un utilisateur secondaire"/></a>


        <footer>
            <?php include("Vue/footer.php") ?>
        </footer>

    </body>
</html>



