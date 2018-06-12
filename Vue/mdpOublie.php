
<!DOCTYPE html>
<html>
    <head>
        <title>Mot de passe oubliÃ©</title>
        <link rel="stylesheet" href="Vue/CSS/styleMDP.css">
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <meta charset="utf-8" />

    </head>
 <body >
        <header>
            <?php include("Vue/header.php") ?>
        	</header>

    <div class="bloc">
        
        <form method="post" action="index.php?cible=mdpoub2">
            
            <h2>MOT DE PASSE OUBLIE</h2>
           

            <span class="color">Saisissez votre adresse email
            </span>

                <br/> <br />
            
            <input id="email"  class="text" type="text" name="email"/>
            <br/> <br />
            
            <input class="valider" type="submit" value="VALIDER" name="forgotPass">
                
                <br/>

        </form>


      
    </div>

        <br/>
    <footer>
            <p>Copyright 2018 HomeMate | Tous droits rÃ©servÃ©s</p>
    </footer>
 <br/>
     <footer>
            <?php include("Vue/footer.php") ?>
        	</footer>
 </body>

</html>
