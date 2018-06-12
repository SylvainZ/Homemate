$(document).ready(function(){

    $("#valider").click(function(e){
        e.preventDefault();

        $.post(
            'Controleur/authentification.php',
            {
                username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à authentification.php
                password : $("#password").val()
            },

            function Nom(data){

                if (data == 'success') { // && Admin == false
                    // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                    //document.getElementById('resultat').innerHTML = "Login successful.";
                    //$("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                    window.location = 'Modele/sessionProfil.php?email='+$("#username").val();
                }
                /*else if (data == 'success') {//
                    window.location = 'index.php?cible=boiteMail' ;
                }*/
                else {
                    // Le membre n'a pas été connecté. (data vaut ici "failed")
                    document.getElementById('resultat').innerHTML = "Authentification echouée. Veuillez recommencer.";
                    //$("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }

            },
            'text'
        );
    });
});

