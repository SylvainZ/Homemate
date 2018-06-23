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
<p>Choisissez l'habitation à lier avec l'utilisateur secondaire</p>

<table>
    <thead>
        <tr>
            <td>Adresse</td>
            <td>Nombre de pièce</td>
            <td>Superficie</td>
        </tr>
    </thead>
    <tbody>
             <?php
                $flag2=true;
                $i=0;
                if (isset($_SESSION['adresseHab']) && isset($_SESSION['pieceHab']) && isset($_SESSION['superficieHab'])) {
                    while($flag2) {
                        if (isset($_SESSION['adresseHab'][$i]) && isset($_SESSION['pieceHab'][$i]) && isset($_SESSION['superficieHab'][$i])) {
                            echo '<tr>';
                            echo '<td><a href="index.php?cible=lienLogSec&logement='.$i.'">'.$_SESSION['adresseHab'][$i]. ' </a></td> ';
                            echo '<td>'.$_SESSION['pieceHab'][$i]. ' </td>';
                            echo '<td>'.$_SESSION['superficieHab'][$i]. ' </td>';
                            echo ' </tr>' ;
                            $i++;
                        }
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



