<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/autorisation.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css" />

    <title>Préférences</title>
</head>

<header>
    <?php include("Vue/header.php") ?>
</header>

<h1>Gérer les préférences</h1>

<h2>Informations sur l'utilisateur secondaire</h2>

<p>
    <table>

        <?php

        if (isset($_SESSION['nomA'][$ind]) && isset($_SESSION['prenomA'][$ind])) { ?>

            <tr>
                <td>Nom : </td>
                <td><?php echo $_SESSION['nomA'][$ind] ?></td>
            </tr>
            <tr>
                <td>Prénom : </td>
                <td><?php echo $_SESSION['prenomA'][$ind] ?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php echo $_SESSION['emailAut'][$ind]; ?></td>
            </tr>
            <tr>
                <td>Habitation(s) autorisée(s) : </td>
                <?php if (!empty($adresseHabAutor)) {
            foreach ($_SESSION['adresseHabA'] as $ad) {
                echo '<td>'.$ad.'</td>';
                echo '<td>bouton ON OFF</td>';
                echo '<td><a href="index.php?cible=modifAutorisation&act=supprimer&indice='.$ind.'"><input type="button" value="Supprimer cette autorisation"/></a></td>' ?>
            </tr>

        <?php }  } } ?>
    </table>

<a href="index.php?cible=modifAutorisation&act=ajouter&indice=<?php echo $ind ?>"><input type="button" value="Ajouter"/></a>
<a href="index.php?cible=autorisation"><input type="button" value="Annuler"/></a>

</p>



<footer>
    <?php include("Vue/footer.php") ?>
</footer>

</body>
</html>



