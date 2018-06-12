<?php

if (isset($_POST["modifier"]))
 {

	if (isset($_POST["mdp1"]) AND isset($_POST["mdp2"]) AND isset($_POST["mdpA"])) 
	{
    
    	$email = $_SESSION['email'];
    
   		$mdp1=$_POST["mdp1"];

   		$mdp2=$_POST["mdp2"];

   		$mdpA=sha1($_POST["mdpA"]);

   		include('connexionBD.php');

   		$req1 = $bdd->query('SELECT password FROM profil WHERE Email = \'' . $_SESSION['email'] . '\'');
   		
   		$donnees1 = $req1->fetch();

   		$mdpA2=$donnees1['password'];

   	if (($mdp1==$mdp2) AND ($mdpA==$mdpA2)) 
	   	{
	        
	        $password = sha1($mdp1);

	       
	       
	        $req = $bdd->query("UPDATE profil SET password ='$password' WHERE email = '$email'");
	        echo $email;
	        echo $password;
	  	}

  	else
	  	{
	        echo "Verifiez votre saisie";
	    }
	}
}

?>
