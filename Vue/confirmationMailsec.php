<!DOCTYPE html>
<html>
<head>
    <title>Mot de passe oubliÃ©</title>
    <link rel="stylesheet" href="Vue/CSS/styleMDP.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
    <meta charset="utf-8" />

</head>
<body >
<header>
    <?php include("Vue/header.php") ?>
</header>

<div class="bloc">

    <form method="post" action="index.php?cible=confirmSec">

        <h2>Confirmation</h2>


        <span class="color">Saisissez le code de confirmation envoyé par email
            </span>

        <br/> <br />

        <input id="code"  class="text" type="text" name="code"/>
        <br/> <br />

        <input class="valider" type="submit" value="VALIDER" name="validcod">

        <br/><br/><br/><br/>

    </form>



</div>

<br/>
<footer>
    <p>Copyright 2018 HomeMate | Tous droits rÃ©servÃ©s</p>
</footer>
<br/>
<footer>
    <?php include("Vue/footer.php") ?>
</footer>
</body>

</html>