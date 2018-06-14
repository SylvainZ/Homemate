<?php

    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

if(isset($_POST['nom'])) {
    $requete = $bdd->prepare("SELECT Email FROM administrateur WHERE Email = ?");
    $requete->execute(array($_POST['Email']));
    $existence = true;
    while ($donnees = $requete->fetch()){

        if ($donnees['Email'] == $_POST['Email']) {
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

    if ($existence){

        $_SESSION['Email'] = $_POST['Email'];
        $password = sha1($_POST['password']);
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $Email = $_POST['Email'];


        $req = $bdd->prepare("INSERT INTO administrateur(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
        $req->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'Email' => $Email,
            'password' => $password,
        ));


    }
}


else

    header('Location:index.php?cible=creerUnCompte');
?>