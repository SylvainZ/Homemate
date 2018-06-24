//fonction d'appel d'une requête et affichage de la valeur retournée

function ajaxCall(lien, nomId){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(nomId).innerHTML =this.responseText;
           /* var elems = document.getElementsByClassName(nomClass);
            for(var i = 0; i < elems.length; i++) {
                elems[i].innerHTML = "blabla";
            }*/
        }
    };
    xhttp.open("GET", lien, true);
    xhttp.send();
}

//mise en place d'un tempo d'appel des requêtes

//recupère les données de la passerelles toutes les 5s
setInterval('ajaxCall("Controleur/recupDonneesPasserelle.php","trame")', 5000);

//controle des notifications toutes les 0.2s
setInterval('ajaxCall("Controleur/notification.php","notification-count")', 200);


