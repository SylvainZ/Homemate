<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <title> Locataire/Propriétaire</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="vue/CSS/styleLocProp.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
	
</head>

<body >

<header>
    <?php include("Vue/header.php") ?>

</header>


<div id="bloc">

    <h1 class="center">Locataire/Propriétaire</h1>

    <section>
        <div id="block1">
        <h2 id="titre1">Données personnelles</h2>
        <form name = "form" action="index.php?cible=creerUnCompteBis" method="post" onsubmit="return cgu()">

            <div id="ligne1">

                <label for="dateDeNaissance">
                    Date de naissance<br>
                    <input type="date" name="dateDeNaissance" class="champ">
                </label><br><br>

                <label for="tel">
                    Numéro de téléphone<br/>
                    <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="tel" class="champ">
                </label><br>
            </div><br>

            <div id="ligne2">
                <select name="statut" id="champ" class="champ">
                    <option value="proprietaire">proprietaire</option>
                    <option value="locataire">locataire</option>
                </select><br /><br/>
            </div>

</html>