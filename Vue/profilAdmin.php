
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Vue/CSS/miseEnPageProfil.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css" />
    <title>Profil</title>
</head>

<body>

<header>
    <?php include("Vue/header.php") ?>

</header>
<br />
<div id="page">
    <img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" /><span class="profil">Profil</span>

    <br>
    <br>
    <br>


    <div class="bar">
        <div class="aff">


            <div class="br">
                <span class="texte"> Nom: <?php echo $_SESSION['nom'];?></span><br>
                <span class="texte"> Prenom: <?php echo $_SESSION['prenom'];?></span><br>
                <span class="texte"> Age: <?php echo $_SESSION['age'];?> ans</span><br>
                <span class="texte"> Email: <?php echo $_SESSION['email'];?></span><br>
                <span class="texte"> Telephone: 0<?php echo $_SESSION['numTel'];?></span><br>
                <span class="texte"> Addresse: <?php echo $_SESSION['adresse'].' <br/> 
                '.$_SESSION['codePostal'].' '.$_SESSION['ville'].' <br/> 
                '.$_SESSION['pays'];?></span><br>
            </div>
        </div>
        <div >
            <a href="index.php?cible=modifieProfil" ><input type=button value = "Modifier le profil"/></a> <br>

            <a href="index.php?cible=controleUser"><input type=button value = "Gérer le site"/></a><br/><br/>
        </div>
    </div>
</div>


<?php include("Vue/footer.php") ?>


</body>
</html>
