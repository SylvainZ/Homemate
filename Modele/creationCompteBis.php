<?php


if(isset($_POST['nom']))
{   
include('connexionBD.php');


    $requete = $bdd->prepare("SELECT Email FROM profil WHERE Email = ?");
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
            

            $req = $bdd->prepare("INSERT INTO profil(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'Email' => $Email,
                'password' => $password,
            ));
            header('Location:index.php?cible=locataireProprietaire');
            
        }
    }


else
    
    header('Location:index.php?cible=creerUnCompte');
?>