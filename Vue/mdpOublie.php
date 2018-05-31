<!DOCTYPE html>
<html>
    <head>
        <title>Mot de passe oublié</title>
        <link rel="stylesheet" href="Vue/CSS/styleMDP.css">
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <meta charset="utf-8" />

    </head>
 <body >
        <img class="image" src="Vue/images/homemate2.png" alt="image logo">

    <div class="bloc">
        
        <form method="post" action="Controleur/authentification.php">
            
            <h2>MOT DE PASSE OUBLIE</h2>
           
            <span class="color">Saisissez votre pseudo
            </span>
            
            <br/><br />

            <input id="pseudo" class="text" type="text" name="pseudo"/>
        
                <br /><br/>

            <span class="color">Saisissez votre adresse email
            </span>

                <br/> <br />
            
            <input id="email"  class="text" type="text" name="email"/>

                <br /><br/>
            
            <input class="valider" type="submit" value="VALIDER">
                
                <br/>

        </form>


      
    </div>

        <br/>
    <footer>
            <p>Copyright 2018 HomeMate | Tous droits réservés</p>
    </footer>
 <br/>
 </body>

</html>