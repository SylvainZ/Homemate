<?php


if(isset($_POST['nom']))
{   
include('connexionBD.php');


    $requete = $bdd->prepare("SELECT Email FROM profil WHERE Email = ?");
    $requete->execute(array($_POST['Email']));
    while ($donnees = $requete->fetch()){
        
        if ($donnees['Email'] == $_POST['Email']) {
            $message="Ce mail est déjà utilisé";
            include('Vue/creerUnCompte.php');          
            
        }
        
        else
        {
            $_SESSION['Email'] = $_GET['Email'];
            
            
            $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
            $password = sha1($_GET['password']);
            $prenom = $_GET['prenom'];
            $nom = $_GET['nom'];
            $Email = $_GET['Email'];
            
            
            
            
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

}
else
    
    header('Location:index.php?cible=creerUnCompte');
?>