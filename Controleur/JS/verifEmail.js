$(document).ready(function(){

    $("#valider").click(function(e){
        e.preventDefault();

        $.post(
            '../Modele/creationCompteBis.php',
            {
                Email : $("#mail").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à authentification.php
                password : $("#password").val(),
                nom : $("#nom").val(),
                prenom : $("#prenom").val()
            },

            function(data){

                if (data == 'success') {
                    // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                    //document.getElementById('resultat').innerHTML = "Login successful.";
                    //$("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                     window.location = '../Modele/creationCompteBis.php?Email='+$("#mail").val()'&password='+$("#password").val()'&nom='+$("#nom").val()'prenom='+$("#prenom").val();
                }
                
                else {
                    // Le membre n'a pas été connecté. (data vaut ici "failed")
                    document.getElementById('verifMail').innerHTML = "Cet email existe déjà";
                    //$("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }

            },
            'text'
        );
    });
});
