<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Corbeille</title>
    <link rel="stylesheet" href="Vue/CSS/styleBoiteMail.css" />
    <link rel="stylesheet" href="Vue/CSS/all.css" />


</head>

<body>
<!--Mise en place de la barre de conexion-->
<header>
    <?php include("header.php") ?>
</header>
<div id="page">
    <!--Logo
        <img src="images/homemate2.png" alt="logo HomeMate" id="logo"/>-->

    <h1>Corbeille</h1>

    <!--Positionnement menu et liste des messages-->
    <div class="listeMessage">
        <!--Menu-->
        <section class="menuGauche">
            <p>
                <a href="index.php?cible=messagerie"><input type="button" value="Nouveau message" class="nouveau"/>
                </a>
            <div><a href="index.php?cible=boiteMailReception" class="nonActive">Liste des messages</a></div><br/>
            <div><a href="index.php?cible=corbeilleRecherche" class="active">Corbeille</a></div>
            </p>
        </section>

        <!--Liste des messages-->
        <section class="rectangle">
            <!--Début du formulaire-->
            <form action="index.php?cible=gestionCorbeille" method="post" name="F1">
                <p>
                    <!--En-tête du bloc Liste des messages-->
                <div class="debut">
                    <h2>Liste des messages</h2>
                    <section class="option">
                        <label for="selection">Pour la sélection : </label>
                        <input type='submit'/>
                        <select name="selection" id="selection">
                            <option value="restaurer">Restaurer</option>
                            <option value="supprimer">Supprimer définitivement</option>
                        </select><br/>
                        </input>

                    </section>
                </div>

                <!--<label for="tout">Tout sélectionner</label>-->

                <!--En-tête (Sujet, Expéditeur,Date)-->
                <div class="en_tete">
                    <!--Trouver le numéro d'élément de l'input ci-dessous pour pouvoir cocher toutes les cases-->
                    <input id="coche" type="checkbox" value="Tout cocher" title="Tout sélectionner" onclick="return cocher(this);"/>

                    <span>Sujet</span>
                    <span>Expéditeur</span>
                    <span>Date</span>
                </div>


                <!--Affichage des messages de la bdd-->
                <div class="rectanglebis">

                    <?php
                    $i=0;             //variable incrémentale qui parcours tout les messages

                    $nbMailsTotale=0;//variable qui compte le nombre de messages
                    if(isset($_SESSION['corbeille'])&& !empty($_SESSION['corbeille'])) {
                        foreach ($_SESSION['corbeille'] as $value) {
                            $nbMailsTotale++;
                        }
                    }


                    while($i < $nbMailsTotale && isset($_SESSION['sujet'][$i])){
                        /*Vérification de l'existence des variables*/

                        if (isset($_SESSION['sujet'][$i]) && isset($_SESSION['nomExp'][$i]) && isset($_SESSION['date'][$i])&&
                            !empty($_SESSION['sujet'][$i]) && !empty($_SESSION['nomExp'][$i]) && !empty($_SESSION['date'][$i])) {

                            if ($_SESSION['corbeille'][$i] == 1) {
                                ?>
                                <div class="message">
                                    <input type="checkbox" class="messagecheck" name="<?php echo $i?>"/>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td width="15%">
                                                <div class="sujet">
                                                    <a href="index.php?cible=pageMessage&message=<?php echo $i?>"
                                                        <?php if ($_SESSION['consulte'][$i]){ echo 'class="messageIndSujetLu"';}
                                                        else{echo 'class="messageIndSujetNonLu"';}
                                                        ?>
                                                    >
                                                        <span ><?php echo $_SESSION['sujet'][$i]?></span> </a>
                                                </div>
                                            </td>

                                            <td width="10%" >
                                                <div class="expediteur">
                                                    <a href="index.php?cible=pageMessage&message=<?php echo $i?>"
                                                        <?php if ($_SESSION['consulte'][$i]){ echo 'class="messageIndLu"';}
                                                        else{echo 'class="messageIndNonLu"';}
                                                        ?>
                                                    >
                                                        <span ><?php echo $_SESSION['nomExp'][$i]?></span></a>
                                                </div>
                                            </td>

                                            <td width="10%">
                                                <a href="index.php?cible=pageMessage&message=<?php echo $i?>"
                                                    <?php if ($_SESSION['consulte'][$i]){ echo 'class="messageIndLu"';}
                                                    else{echo 'class="messageIndNonLu"';}
                                                    ?>
                                                >
                                                    <span ><?php echo $_SESSION['date'][$i]?></span></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <?php
                            }
                        }
                        $i++;
                    }?>


                </div>
                </p>
            </form>
        </section>
    </div>


</div>



<?php include("footer.php") ?>


<script type="text/javascript" src="Controleur/JS/cocher.js"></script>