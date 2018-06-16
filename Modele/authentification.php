<?php
session_start();

//vérifie que les champs ont bien été remplis
if (isset($_POST['username'])
    &&isset($_POST['password'])) {

    //appelle la BDD homemate
     include('connexionBD.php');

    $pass=sha1(htmlspecialchars($_POST['password']));


    /*Parcours la BDD Admin pour y trouver les identifiants de l'utilisateur*/
    $requeteAdmin = $bdd->prepare("SELECT Email,password FROM administrateur WHERE Email = ? AND password = ?");
    $requeteAdmin->execute(array(htmlspecialchars($_POST['username']), $pass));
    while ($donneesAdmin = $requeteAdmin->fetch()){
        if (isset($donneesAdmin['Email'])&& isset($donneesAdmin['password'])) {
            $_SESSION['Admin']=true;
            echo "success";

        }
        else {
            echo "failed";
        }
    }

    /*Parcours la BDD des utilisateurs pour y trouver les identifiants de l'utilisateur*/
    $requete = $bdd->prepare("SELECT Email,password FROM profil WHERE Email = ? AND password = ?");
    $requete->execute(array(htmlspecialchars($_POST['username']), $pass));
    while ($donnees = $requete->fetch()){
        if (isset($donnees['Email'])&& isset($donnees['password'])) {

            echo "success";

        }
        else {
            echo "failed";
        }
    }


}
?>
