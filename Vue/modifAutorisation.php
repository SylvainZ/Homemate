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

<!-- affichage des informations de l'utilisateur secondaire-->
    <table>

        <?php

        //vérifie l'existence des variables à afficher
        if (isset($_SESSION['nomA'][$ind]) && isset($_SESSION['prenomA'][$ind])) { ?>

            <!--affiche les nom, prénom, email et l'adresse des habitations autorisées-->
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
                <?php
            //vérifie s'il est relié à un logement
            if (!empty($adresseHabAutor)) {
            foreach ($_SESSION['adresseHabA'] as $ad) {

                //adresse du logement
                echo '<td>'.$ad.'</td>';

                //bouton permettant de limiter les autorisations
                echo '<td>bouton ON OFF</td>';

                //bouton permettant de supprimer l'autorisation sur l'habitation concernée
                echo '<td><a href="index.php?cible=modifAutorisation&act=supprimer&indice='.$ind.'"><input type="button" value="Supprimer cette autorisation"/></a></td>' ?>
            </tr>

        <?php }  } } ?>
    </table>
<!-- bouton permettant d'ajouter d'autre habitation-->
<a href="index.php?cible=modifAutorisation&act=ajouter&indice=<?php echo $ind ?>"><input type="button" value="Ajouter"/></a>

<!-- bouton permettant de retourner à la liste des utilisateurs secondaires -->
<a href="index.php?cible=autorisation"><input type="button" value="Annuler"/></a>

</p>



<footer>
    <?php include("Vue/footer.php") ?>
</footer>

</body>
</html>



