<?php
session_start();

if(isset($_POST['nom']))
{   
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $requete = $bdd->prepare("SELECT Email FROM profil WHERE Email = ?");
        $requete->execute(array($_POST['Email']));
        while ($donnees = $requete->fetch()){
            
            if ($donnees['Email']== $_POST['Email']) {
               /* $_SESSION['message'] = "ce mail existe déjà";
                header('Location:../Controleur/verifEmail.js');*/
                echo "failed";
                
            }
            else
            {
                 echo "success";    
        
            }
       }
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }




}

?>