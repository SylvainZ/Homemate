<?php
include('Modele/connexionBD.php');


//Selectionne les noms de capteur et actionneur de la base de données

$reponse_capteur = $bdd->query('SELECT * FROM typecapteuractionneur WHERE Capteur=1');
$reponse_actionneur = $bdd->query('SELECT * From typecapteuractionneur WHERE Actionneur=1');
$nbLigne1=0;
$nbLigne2=0;
$nbColonne1=1;
$nbColonne2=1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrateur - Capteur/Actionneur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Vue/CSS/styleAdminCA.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">

</head>

<body>

    <header>
        <?php include("Vue/header.php") ?>
    </header>
<div id="page">
	<section id="blocs">
		<div class="image" >
			<img class="homemate" src="Vue/images/logo_nouvo.png">
			<img class="profil" src="Vue/images/iconeProfil.png">
		</div>

        <!--En-tête-->
		<div class="tete">
			<ul>
				<li class="decoration"><span class="padding">
				<a href="index.php?cible=controleUser">
                    Comptes Utilisateurs</a></span></p></li>
                <li class="decoration" id="blue"><span class="padding"><a href="index.php?cible=controleCapteur2">Capteurs/Actionneurs</a></span></p></li>
                <li class="decoration"><span class="padding"><a href="index.php?cible=controlePerso">Personnalisation du site</a></span></p></li>
			</ul>
		</div>
	</section>

    <!--Liste des capteurs et actionneurs ajoutés-->
    <section class="big">
        <div class="bloc2 bloc1">
        <div class="blocCapteur">
            <h3 >Voici les capteurs</h3>
              <?php
            echo '           
            <table>
                <tbody>
                    <tr>';
            /*Ajouter une ligne à chaque fois qu'un type est ajouté*/
            while ($donnees1 = $reponse_capteur->fetch()){
                if (($nbLigne1 % $nbColonne1) ==0 && $nbLigne1 !=0){
                    echo '</tr><tr>';
                    $nbLigne1=0;
                }
            ?>

            <td>
                <div class="capteur">
                <div class="texttype"><?php echo $donnees1['nomType']?></div>
                <form method="post" action="index.php?cible=supprimerType&idSupTypCapteur=<?php echo $donnees1['ID_type']?>">
                    <input type="submit" class="supprimer boutonSupprimer" value="X"/>
                </form>
                </div>
            </td>

            <?php $nbLigne1++; }?>

             <?php echo '</tr>
                </tbody>
            </table>';?>


        </div>

        <div class="blocActionneur">
            <h3 >Voici les actionneurs</h3>
            <?php
            echo '           
            <table>
                <tbody>
                    <tr>';
            while ($donnees2 = $reponse_actionneur->fetch()){
                if (($nbLigne2 % $nbColonne2) ==0 && $nbLigne2 !=0){
                    echo '</tr><tr>';
                    $nbLigne2=0;
                }
                ?>

                <td>
                    <div class="capteur">
                    <div class="texttype"><?php echo $donnees2['nomType']?></div>
                    <form method="post" action="index.php?cible=supprimerType&idSupTypActionneur=<?php echo $donnees2['ID_type']?>">
                        <input type="submit" class="supprimer boutonSupprimer" value="X"/>
                    </form>
                    </div>
                </td>

                <?php $nbLigne2++; }?>

            <?php echo '</tr>
                </tbody>
            </table>';?>
        </div>
        </div>

        <!--Petit formulaire pour ajout de type de capteur et actionneur-->
        <div class="bloc2">
            <h1>Ajouter des capteurs ou des actionneurs : </h1>
            <p class="titreType">Ajouter un capteur :</p>
            <form action="index.php?cible=controleCapteur" method="POST">
                Type : <input type="text" name="ajoutCapteur" style="width: 10vw;" >
                <input type="submit" value="Ajouter" class="bouton">

                <p class="titreType">Ajouter un actionneur : </p>
                Type : <input type="text" name="ajoutActionneur" style="width: 10vw;" >
                <input type="submit" value="Ajouter" class="bouton">
            </form>
        </div>
    </section>
</div>

            <?php include("Vue/footer.php") ?>


</body>
</html>
