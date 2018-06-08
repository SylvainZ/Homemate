<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="Vue/CSS/connexion.css">
        <link rel="stylesheet" href="Vue/CSS/all.css">
        <meta charset="utf-8" />


    </head>
 <body >

 <a href="index.php?cible=accueil"><img class="image"   src="Vue/images/homemate2.png" alt="image logo"></a><br>
<div id="page">
   <div class="connection">
        <h2>CONNEXION</h2>
        <div id="resultat"></div>

        <form >

            <span class="color">Saisissez votre identifiant
            </span>
            
            <br/>

            <input id="username" class="champs" type="email" name="Email" required/>
        
                <br /><br/>

            <span class="color">Saisissez votre mot de passe
            </span>

                <br/> 
            
            <input id="password"  class=champs type="password" name="password" required/>

                <br /><br/>

            <input id="valider" type="submit" value="VALIDER"">
                
                <br/>
        </form>
         <a href= "index.php?cible=mdpOublie" target="_blank"> Mot de passe oublié ?</a><br/>
         <a href="index.php?cible=creerUnCompte">Pas encore de compte?</a> <br/><br/>
    </div>
</div>
        <br/>


 <?php include('Vue/footer.php');?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="Controleur/JS/connexion.js" type="text/javascript"></script>
 </body>
</html>
