<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Vue/CSS/miseEnPageProfil.css" />
        <link rel="stylesheet" href="Vue/CSS/all.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <title>Profil</title>
    </head>

    <body>
    	<header>
            <?php include("Vue/header.php") ?>
        </header>

        <div id="page">
            <span class="profil">Profil</span>

<!--Renseignement du profil-->
            <div class="col-xs-6 col-md-offset-3 ">
                <div class="panel panel-default" style="background-color: #2f0c1b; border-radius: 10px">
                    <div class="panel-heading" style="background-color: #2f0c1b; border-radius: 10px" ><h3 style="color: white">Informations sur l'utilisateur</h3></div>
                    <div class="panel-body" style="background-color: #6a1b3c">
                        <table style="color: white">
                            <tr>
                                <td>Nom</td>
                                <td>: <?php echo $_SESSION['nom'];?></td>
                            </tr>
                            <tr>
                                <td>Prénom </td>
                                <td>: <?php echo $_SESSION['prenom'];?></td>
                            </tr>
                            <tr>
                                <td>Age </td>
                                <td>: <?php echo $_SESSION['age'];?> ans </td>
                            </tr>
                            <tr>
                                <td>Statut </td>
                                <td>: <?php echo $_SESSION['statut'];?> </td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td>: <?php echo $_SESSION['email'];?> </td>
                            </tr>
                            <tr>
                                <td> Numéro de téléphone</td>
                                <td>: 0<?php echo $_SESSION['numTel'];?></td>
                            </tr>
                            <tr>
                                <td> Adresse</td>
                                <td>: <?php echo $_SESSION['numRue'].' '; if ($_SESSION['numBis']!='NONE') {echo $_SESSION['numBis'].' ';} echo $_SESSION['prefixRue'].' '.$_SESSION['nomRueBdAve'];?></td>
                            </tr>
                            <tr>
                                <td></td>
                                 <td>
                                      <?php if ($_SESSION['typeHab']=='Appartement') {echo 'Appartement '.$_SESSION['numLogement'].' Etage '.$_SESSION['numEtage'];} ?>
                                 </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> <?php echo $_SESSION['codePostal'].' '.$_SESSION['ville']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> <?php echo $_SESSION['pays']; ?></td>
                            </tr>
                        </table>

                    </div>
                    <br>
                     <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Modifier le profil</button>
                     <a href="index.php?cible=modifiermdp"><input type=button value = "Modifier votre mot de passe" class="boutonModifProfil"/></a>
                    <a href="index.php?cible=autorisation"><input type=button value = "Gérer les autorisations" class="boutonModifProfil"/></a><br/><br/>
                </div>
            </div>
                 </div>
            <div >


            </div>
        </div>

            <?php include("Vue/footer.php") ?>

<!-- définition fenetre modale pour la modification du profil-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                <div class="modal-dialog" role="document" style="background-color: #2f0c1b">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span style="font-weight: bold">Modifier ses informations</span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php?cible=profilModifie" method="post" enctype="multipart/form-data" onsubmit="return modifProfil()">
<!--Champs avec informations prédéfinies-->
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
                                                    <td>Statut: </td>
                                                    <td><select name="statut">
                                                            <option value="proprietaire">proprietaire</option>
                                                            <option value="locataire">locataire</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Numéro d'appartement:</td>
                                                    <td><input type="text" name="numLogement" placeholder="numÃ©ro d'appartement" value=<?php echo $_SESSION['numLogement'];?>></td>
                                                </tr>
                                                <tr>
                                                    <td>Numéro d'étage:</td>
                                                    <td><input type="text" name="numEtage" placeholder="numÃ©ro d'Ã©tage" value= <?php echo $_SESSION['numEtage'];?> ></td>
                                                </tr>
                                                <tr>
                                                    <td>Numéro de la rue:</td>
                                                    <td><input type="text" name="numRue" placeholder="numÃ©ro de rue" value=<?php echo $_SESSION['numRue'];?>></td>
                                                </tr>

                                            </table>
                                        </td>
                                        <td>
                                            <table>

                                                <tr>
                                                    <td>Type:</td>

                                                    <td> <input type="checkbox" name="numBis" value="bis"/><label for="bis">bis</label>
                                                        <select name="prefixeRueBdAve">

                                                            <option value="rue">rue</option>
                                                            <option value="bd">boulevard</option>
                                                            <option value="ave">avenue</option>
                                                            <option value="imp">impasse</option>
                                                            <option value="pond">pond</option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nom de rue: </td>

                                                    <td> <input type="text" name="nomRueBdAve" placeholder="nom de rue, boulevard ou avenue" value="<?php echo $_SESSION['nomRueBdAve'];?>" /></td>

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
                                                    <td>Email:</td>
                                                    <td> <input type="text" name="email" placeholder="email" value=<?php echo $_SESSION['email'];?> ></td>
                                                </tr>
                                                <tr>
                                                    <td>Téléphone: </td>
                                                    <td> <input type="text" id="numTel" name="numTel" placeholder="numÃ©ro de tÃ©lÃ©phone" value="0<?php echo $_SESSION['numTel'];?>"><div id="nonNum"></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>



                                <button class="btn btn-default" type="submit" >Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        <script type="text/javascript" src="Controleur/JS/locataireproprietaire.js"></script>

    </body>
</html>

