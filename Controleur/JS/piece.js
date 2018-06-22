function verifPiece(){
    var Nom= document.getElementById('nom').value;
    var chiffres = new String(Nom);
    var taille = chiffres.length;

    var faux=0;

    //si le numéro de téléphone n'est pas à 10 chiffres
    if (taille>10)
    {
        document.getElementById("tailleNom").innerHTML = "Assurez-vous de ne pas dépasser 10 carctères";
        faux+=1;
    }


    if (faux>0){
        return false;
    }
	
}