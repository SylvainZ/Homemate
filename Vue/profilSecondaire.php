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
                        <td>Statut </td>
                        <td>: <?php echo $_SESSION['statut'];?> </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $_SESSION['email'];?> </td>
                    </tr>

                    <tr>
                        <td> Adresse</td>
                        <td>: <?php echo $_SESSION['adresse'];?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <?php echo $_SESSION['codePostal'].' '.$_SESSION['ville']; ?></td>
                    </tr>
                </table>

            </div>
            <br>
            <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Modifier le profil</button>
            <a href="index.php?cible=modifiermdp"><input type=button value = "Modifier votre mot de passe" class="boutonModifProfil"/></a>
            <br/><br/>
        </div>
    </div>
</div>
<div >


</div>
</div>

<?php include("Vue/footer.php") ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog" role="document" style="background-color: #2f0c1b">
        <div class="modal-content">
            <div class="modal-header">
                <span style="font-weight: bold">Modifier ses informations</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="index.php?cible=profilModifie" method="post" enctype="multipart/form-data" onsubmit="return modifProfil()">

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

