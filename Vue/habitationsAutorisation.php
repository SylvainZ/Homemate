<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/autorisation.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css" />

    <title>Liste des habitations</title>
</head>

<body>
<header>
    <?php include("Vue/header.php") ?>
</header>

<h1>Gérer les autorisations</h1>

<h2>Liste des habitations</h2>
<p>Choisissez l'habitation à lier avec l'utilisateur secondaire : </p>

<!--Tableau récapitulatif des habitations de l'utilisateur principal-->
<table>
    <!--En-tête du tableau -->
    <thead>
        <tr>
            <td>Adresse</td>
            <td>Nombre de pièce</td>
            <td>Superficie</td>
        </tr>
    </thead>
    <!--Corps du tableau -->
    <tbody>
        <!--affichage de la liste des habitations en php -->
             <?php
                $flag2=true;
                $i=0;

                //vérifie l'existence des tableaux à afficher
                if (isset($_SESSION['adresseHab']) && isset($_SESSION['pieceHab']) && isset($_SESSION['superficieHab'])) {
                    while($flag2) {

                        //vérifie lexistence de la variable à afficher
                        if (isset($_SESSION['adresseHab'][$i]) && isset($_SESSION['pieceHab'][$i]) && isset($_SESSION['superficieHab'][$i])) {

                            //affiche l'adresse, le nombre de pièces et la superficie de chaque habitation
                            echo '<tr>';
                            echo '<td><a href="index.php?cible=lienLogSec&logement='.$i.'">'.$_SESSION['adresseHab'][$i]. ' </a></td> ';
                            echo '<td><a href="index.php?cible=lienLogSec&logement='.$i.'">'.$_SESSION['pieceHab'][$i]. ' </a></td>';
                            echo '<td><a href="index.php?cible=lienLogSec&logement='.$i.'">'.$_SESSION['superficieHab'][$i]. ' </a></td>';
                            echo ' </tr>' ;
                            $i++;
                        }

                        //sort de la boucle lorsqu'il n'y a plus rien à afficher
                        else{
                            $flag2=false;
                        }
                    }
                } ?>

    </tbody>
</table>


<footer>
    <?php include("Vue/footer.php") ?>
</footer>

</body>
</html>



