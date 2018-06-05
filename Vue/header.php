<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="Vue/CSS/header.css">
    <meta charset="utf-8" />
    <script type="text/javascript">
        sfHover = function() {
            var sfEls = document.getElementById("menu").getElementsByTagName("LI");
            for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                    this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                    this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
            }
        }
        if (window.attachEvent) window.attachEvent("onload", sfHover);
    </script>

</head>

<body>
	 
    <div class="barreMenu">
     <div class="cd"> <a href="index.php?cible=accueil"><img src="Vue/images/homemate2.png"> </a></div>
	 <a href="index.php?cible=boiteMail" id="icone"><img class="imageLettre" src="Vue/images/mail.png" width="90" height="50"></a>
     <a href="#" id="iconeCloche"><img class="imageLettre" src="Vue/images/bell.png"  height="50"></a>
        <div class="posMenu">
            <ul id="menu">
                    <?php
                    if (isset($_SESSION['nom'])){
                        ?>
                    
                   
                 
                    <li>
                        <a href="#"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']?></a>
                    <ul>
                        <li><a href="index.php?cible=profil	" class="barre">Profil</a> </li>
                        <li><a href="index.php?cible=deconnexion" class="barre">Deconnexion</a> </li>
                    </ul>
                    </li>                

                    <li>
                        <a href="#">Besoin d'aide ?</a>
                    </li>

                    <?php
                    }
                    else{
                        ?>
                    <li>
                    <a href="#">Mon compte</a>
                    <ul>
                        <li><a href="index.php?cible=connexion" class="barre" >Se connecter</a> </li>
                        <li><a href="index.php?cible=creerUnCompte" class="barre">S'inscrire</a> </li>
                    </ul>
                    </li>

                    <li>
                           <a href="index.php?cible=messagerie" class="barre">Nous contacter</a>
                    </li>

                    <li>
                           <a href="#" class="barre">Besoin d'aide ?</a>
                    </li>
                    <?php } ?>



            </ul>
        </div>

    </div>

    <br><br>


</body> 