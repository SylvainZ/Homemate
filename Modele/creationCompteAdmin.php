<?php

    //appelle la BDD homemate
    include('connexionBD.php');

    //vérifie si le champs nom est bien rempli
if(isset($_POST['nom'])) {

    //Sélectionne les mails de la table admin
    $requete = $bdd->prepare("SELECT Email FROM administrateur WHERE Email = ?");
    $requete->execute(array(htmlspecialchars($_POST['Email'])));

    $existence = true;
    //Parcours la table admin pour trouver le mail entré par l'utilisateur
    while ($donnees = $requete->fetch()){

        //vérifie si le mail est déjà utilisé dans la table admin et renvoie vers le formulaire si c'est le cas
        if ($donnees['Email'] == htmlspecialchars($_POST['Email'])) {
            $message="Ce mail est déjà utilisé";
            include('Vue/creerUnCompte.php');
            $existence=false;
            break;
        }

        else {
            $existence = true;
            break;
        }
    }

    //s'il n'est pas utilisé, ajoute un nouvel utilisateur à la table
    if ($existence){

        //sécurisation des champs entrés par l'utilisateur
        $_SESSION['Email'] = htmlspecialchars($_POST['Email']);
        $password = sha1(htmlspecialchars($_POST['password']));
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $Email = htmlspecialchars($_POST['Email']);


        //génerer un code de confirmation
        $code = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        $code = str_shuffle($code); //On crée une combinaison de VARCHAR
        $code = substr($code, 0, 10);

        $_SESSION['cod']=$code;

        $to = $Email;
        $subject = 'Inscription';
        $message = 'Votre code de confirmation est'.' '.$code.'.';
        $headers = 'From: domisep@isep.fr';

        //envoi d'un mail
        mail($to, $subject, $message, $headers);

        $req = $bdd->prepare("INSERT INTO administrateur(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
        $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'Email' => $Email,
            'password' => $password,
        ));
        header('Location:index.php?cible=confirmationAdmin');
    }
}


else {
    //renvoie vers la page de saisie du formulaire
    header('Location:index.php?cible=creerUnCompte');
}
?>