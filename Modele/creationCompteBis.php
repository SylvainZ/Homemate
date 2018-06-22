<?php

//vérifie si le champs nom est bien rempli
if(isset($_POST['nom'])) {
    //appelle la BDD homemate
    include('connexionBD.php');

        //Sélectionne les mails de la table profil
        $requete = $bdd->prepare("SELECT Email FROM profil WHERE Email = ?");
        $requete->execute(array($_POST['Email']));
        $existence = true;

        //Parcours la table profil pour trouver le mail entré par l'utilisateur
        while ($donnees = $requete->fetch()) {
            //vérifie si le mail est déjà utilisé dans la table profil et renvoie vers le formulaire si c'est le cas
            if ($donnees['Email'] == $_POST['Email']) {
                $message = "Ce mail est déjà utilisé";
                include('Vue/creerUnCompte.php');
                $existence = false;
                break;
            } else {
                $existence = true;
                break;
            }
        }
        //s'il n'est pas utilisé, ajoute un nouvel utilisateur à la table
        if ($existence) {

            //sécurisation des champs entrés par l'utilisateur
            $_SESSION['Email'] = htmlspecialchars($_POST['Email']);
            $password = sha1(htmlspecialchars($_POST['password']));
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $Email = htmlspecialchars($_POST['Email']);


            $req = $bdd->prepare("INSERT INTO profil(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'Email' => $Email,
                'password' => $password,
            ));

            if (isset($_SESSION['nom'])) {
                $req = $bdd->prepare("UPDATE profil SET Statut=? WHERE Email= ? ");
                $req->execute(array(
                    'secondaire-'.$_SESSION['ID'],
                    $Email
                ));
                header('Location:index.php?cible=habitationsAutorisation');
            }
            else {
                //renvoie vers le formulaire de la 2e étape de l'inscription
                header('Location:index.php?cible=locataireProprietaire');
            }
        }
}


else
    //renvoie vers la page de saisie du formulaire
    header('Location:index.php?cible=creerUnCompte');
?>