function ajaxCall(lien, nomId){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(nomId).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", lien, true);
    xhttp.send();
}

setInterval('ajaxCall("Controleur/recupDonneesPasserelle.php","trame")', 5000);
setInterval('ajaxCall("Controleur/notification.php","notification-count")', 200);
setInterval('ajaxCall("Controleur/notification.php","notification-countAdmin")', 200);

