<?php
session_start();
?>

<html>
    <head>
        <title>R�initialisation</title>
        <link rel="stylesheet" href="Vue/CSS/styleMDP.css">
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <meta charset="utf-8" />
        <meta charset="utf-8" />
    </head>
 <body >

    <div class="bloc">
        
        <form method="post" action="redirect2.php">
        
            Pour r�inialiser votre mot de passe, veuillez r�pondre aux deux questions ci-dessous.
            <br><br>
            Question 1: Quel est le nom de jeune fille de votre m�re? 

            <input id="response"  class="text" type="text" name="reponse"/>

            <br /><br/>

            Question 2 :En quelle ann�e tes parents se sont-ils rencontr�s ? 

            <input id="response2"  class="text" type="text" name="reponse2"/>
            
            <br><br>
            
            
            Nouveau mot de passe:

            <input id="mdp"  class="text" type="text" name="mdp"/>
            
            <br><br>
            
            <input class="valider" type="submit" value="VALIDER" name="forgotPass2">
                
                <br/>

        </form>

 </body>

</html>