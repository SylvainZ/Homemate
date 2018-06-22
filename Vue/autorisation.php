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
            <tr>
                <td>  <?php
                    $flag=true;
                    $i=0;
                    if (isset($_SESSION['nomA']) && isset($_SESSION['prenomA'])) {
                        while($flag) {
                            if (isset($_SESSION['nomA'][$i]) && isset($_SESSION['prenomA'][$i])) {
                                echo '<tr>'.$_SESSION['nomA'][$i]. ' </tr> ';
                                echo '<tr>'.$_SESSION['prenomA'][$i]. '</tr>';
                                echo '<br/>' ;
                                $i++;
                            }
                            else{
                                $flag=false;
                            }
                        }
                    } ?>
                </td>

            </tr>

        </table>

        <a href="index.php?cible=creerUnCompte"><input type="button" value="Ajouter un utilisateur secondaire"/></a>


        <footer>
            <?php include("Vue/footer.php") ?>
        </footer>

    </body>
</html>



