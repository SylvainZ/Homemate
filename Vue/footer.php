<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="Vue/CSS/footer.css">
    <meta charset="utf-8" />
</head>

<body>
<br><br><br><br><br>
<footer class="footer">
    <p>Copyright 2018 HomeMate | Tous droits réservés</p>
    <p>Conditions générales d'utilisations</p>
    <p>Mentions légales</p>
</footer>

<!-- La session expire au bout de 30 min-->
<script language="javascript" type='text/javascript'>
    function session(){
        window.location="index.php?cible=deconnexion"; //page de déconnexion
    }
    setTimeout("session()",1800000);
</script>

</body>
</html>

