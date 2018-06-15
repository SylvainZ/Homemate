setInterval(ajaxCall, 5000);

function ajaxCall(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("trame").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "Controleur/recupDonneesPasserelle.php", true);
    xhttp.send();
}