
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/mdp.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css">
    <title>Modifier votre profil</title>
</head>

<body>
<header>
    <?php include("Vue/header.php") ?>

</header>

<h1>Modifier profil</h1>

<div class="bloc">

    <form action="index.php?cible=profilModifie" method="post" enctype="multipart/form-data" onsubmit="return modifProfil()">
        <p>

        <table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>Nom:</td>
                            <td><input type="text" name="nom" placeholder="nom" value= <?php echo $_SESSION['nom'];?> ></td>
                        </tr>
                        <tr>
                            <td>Prénom:</td>
                            <td><input type="text" name="prenom" placeholder="prÃ©nom" value="<?php echo $_SESSION['prenom'];?>"/></td>

                        </tr>

                        <tr>
                            <td>Email:</td>
                            <td> <input type="text" name="email" placeholder="email" value=<?php echo $_SESSION['email'];?> ></td>
                        </tr>
                        <tr>
                            <td>Téléphone:</td>
                            <td> <input type="text" id="numTel" name="numTel" placeholder="numÃ©ro de tÃ©lÃ©phone" value=0<?php echo $_SESSION['numTel'];?>><div id="nonNum"></div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>Adresse complète:</td>
                            <td><input type="text" name="adresse" placeholder="Adresse" value="<?php echo $_SESSION['adresse'];?>" /> </td>
                        </tr>
                        <tr>
                            <td>Code postal: </td>
                            <td> <input type="text" id="codePostal" name="codePostal" placeholder="dÃ©partement"  value=<?php echo $_SESSION['codePostal'];?> ><div id="nonPostal"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ville:</td>
                            <td> <input type="text" name="ville" placeholder="ville" value=<?php echo $_SESSION['ville'];?> ></td>
                        </tr>
                        <tr>
                            <td>Pays:</td>
                            <td><input type="text" name="pays" placeholder="Pays" value=<?php echo $_SESSION['pays'];?> /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

            <input type="submit" value="Envoyer les modifications" class="valider"/>
            <a href="index.php?cible=profil" ><input type="button" value="Annuler" class="valider"/></a>
        </p>
    </form>

</div>

<script type="text/javascript" src="Controleur/JS/locataireproprietaire.js"></script>

<footer>
    <?php include("Vue/footer.php") ?>
</footer>

</body>
</html>