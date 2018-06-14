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

    	<br/>
        <div id="page">
    	<img src="Vue/images/iconeProfil.png" class="iconeProfil" alt="Icône Profil" /><span class="profil">Profil</span>
    	<br>
    	<br>
    	<br>
        <div class="bar">
         <div class="aff">
            <div class="br">
                <?php
                try
                {
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }
                catch(Exception $e)
                {
                    // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
                }

                // Si tout va bien, on peut continuer

                // On récupère tout le contenu de la table
                if (isset($_GET['id'])) {
                    $reponse = $bdd->query("SELECT * FROM profil WHERE ID =" . $_GET['id']);
                    //$reponse->debugDumpParams();

                }

                while ($donnees = $reponse->fetch()) {

                    $date_courante = new DateTime(date("Y-m-d"));
                    $date_naissance = new DateTime($donnees['Datedenaissance']);
                    $interval = date_diff($date_courante, $date_naissance);
                    $age = $interval->format('%Y');

                    ?>
                <span class="texte"> Nom: <?php echo $donnees['Nom'];?></span><br>
                <span class="texte"> Prénom: <?php echo $donnees['Prenom'];?></span><br>
                <span class="texte"> Statut: <?php echo $donnees['Statut'];?></span><br>
                <span class="texte"> Email: <?php echo $donnees['Email'];?></span><br>
                <span class="texte"> Téléphone: 0<?php echo $donnees['NumeroTelephone'];?></span><br>
                <span class="texte"> Adresse: <?php echo $donnees['NumeroRue'].' '; if ($donnees['Bis']!='NONE') {echo 'bis ';}
               echo $donnees['PrefixRue'].' '.$donnees['NomRueAveBd'].'<br/>';
                   if ($donnees['TypeHab']=='Appartement') {
                       echo 'Appartement '.$donnees['NumeroLogement'].' Etage '.$donnees['NumeroEtage'].'<br/>';
                   }
               echo $donnees['CodePostal'].' '.$donnees['Ville'].'<br/>';
               echo $donnees['Pays']. '</span><br>';
                }
                ?>
            </div>
        </div>
        <div >
         	<a href="index.php?cible=modifieProfil" ><input type=button value = "Modifier le profil"/></a> <br>

			<a href="index.php?cible=capteurActionneursHabitations"><input type=button value = "Gerer la maison"/></a><br/><br/>
        </div>
        </div>
        </div>
            <?php include("Vue/footer.php"); ?>
    </body>
</html>