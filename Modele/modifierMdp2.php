<?php

//vérifie si l'utilsateur
if (isset($_POST["modifier"]))
 {
 	//appelle la BDD homemate
     include('connexionBD.php');


	if (isset($_POST["mdp1"]) AND isset($_POST["mdp2"]) AND isset($_POST["mdpA"]))
		//Si les mots de passe se correspondent
	{
        //initialisation
    	$email = $_SESSION['email'];
   		$mdp1=htmlspecialchars($_POST["mdp1"]);
   		$mdp2=htmlspecialchars($_POST["mdp2"]);
   		$mdpA=sha1(htmlspecialchars($_POST["mdpA"]));

   		$req1;

		//Si l'utilisateur est un Admin
		if (isset($_SESSION['Admin'])){
            $req1 = $bdd->query('SELECT password FROM administrateur WHERE Email = \'' . $_SESSION['email'] . '\'');
		}

		//Si l'utilisateur n'est pas un Admin
		else {
            $req1 = $bdd->query('SELECT password FROM profil WHERE Email = \'' . $_SESSION['email'] . '\'');
		}


   		
   		$donnees1 = $req1->fetch();
   		$mdpA2=$donnees1['password'];

   	if (($mdp1==$mdp2) AND ($mdpA==$mdpA2)) 
	   	{
	        
	        $password = sha1($mdp1);

	        $req;
			//Changement du mot de passe
            if (isset($_SESSION['Admin'])){
                $req = $bdd->query("UPDATE administrateur SET password ='$password' WHERE email = '$email'");
            }
            else {
                $req = $bdd->query("UPDATE profil SET password ='$password' WHERE email = '$email'");
            }
	        header('location: index.php?cible=profil');
	  	}

  	else
	  	{
            header('location: index.php?cible=modifierMdp');
	    }
	}
}

?>
