<?php include('Modele/connexionBD.php');?>

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

<!--affichage du header en fonction de l'utilisateur-->
        <?php
        if (isset($_SESSION['nom'])){

            //Si c'est un admin
            if (isset($_SESSION['Admin'])) {
        ?>

                <div id="posMenu">
                    <div id="posNotif">
                        <div  id="icone"><a href="index.php?cible=boiteMailReception"><img class="imageLettre" src="Vue/images/mail.png"  width="90" height="50"></a></div>
                        <div id="iconeCloche"><button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn">
                                <span id="notification-count"></span>
                                <img class="imageLettre" src="Vue/images/bell.png"  height="50"></button>
                            <div id="notification-latest"></div>
                        </div>
                    </div>

                    <ul id="menu">
                        <li>
                            <a href="#"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']?></a>
                            <ul>
                                <li><a href="index.php?cible=profil	" class="barre">Profil</a> </li>
                                <li><a href="index.php?cible=controleUser" class="barre">Gérer le site</a> </li>
                                <li><a href="index.php?cible=deconnexion" class="barre">Déconnexion</a> </li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.php?cible=FAQ">Besoin d'aide ?</a>
                        </li>
                    </ul>
                </div>




            <?php  }
            //si c'est un utilisateur
            else {  ?>
                <div id="posMenu">
                    <div id="posNotif">
                        <div  id="icone"><a href="index.php?cible=boiteMailReception"><img class="imageLettre" src="Vue/images/mail.png"  width="90" height="50"></a></div>
                        <div id="iconeCloche"><button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn">
                                <span id="notification-count"></span>
                                <img class="imageLettre" src="Vue/images/bell.png"  height="50"></button>
                                <div id="notification-latest"></div>
                        </div>
                    </div>

                    <ul id="menu">
                            <li>
                                <a href="#"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']?></a>
                            <ul>
                                <li><a href="index.php?cible=profil	" class="barre">Profil</a> </li>
                                <li><a href="index.php?cible=capteurActionneursHabitations" class="barre">Gérer la maison</a> </li>
                                <li><a href="index.php?cible=deconnexion" class="barre">Déconnexion</a> </li>
                            </ul>
                            </li>

                            <li>
                                <a href="index.php?cible=FAQ">Besoin d'aide ?</a>
                            </li>
                    </ul>
                </div>

            <?php }
        }
        else{
            ?>

            <!-- si le visiteur n'a pas de compte -->
            <div id="posMenu">
                <ul id="menu">

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
                               <a href="index.php?cible=FAQ" class="barre">Besoin d'aide ?</a>
                        </li>
                </ul>
            </div>
        <?php } ?>

    </div>

    <br><br>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="Controleur/JS/notification.js" type="text/javascript"></script>
    <script rel="script" src="Controleur/JS/tempo.js"></script>

</body> 