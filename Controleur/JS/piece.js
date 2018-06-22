function verifPiece(indice){

    var Nom= document.getElementById('nomPiece'+indice).value;
    var chiffres = new String(Nom);
    var taille = chiffres.length;

    var faux=0;

    //si le numéro de téléphone n'est pas à 10 chiffres
    if (taille>19)
    {
        document.getElementById("tailleNom"+indice).innerHTML = "Assurez-vous de ne pas dépasser 19 caractères";
        faux+=1;
    }

    if (faux>0){
        return false;
    }
    else{
    	return true;
    }
	
}



function verifPiece2(){

    var Nom= document.getElementById('nomPiece').value;
    var chiffres = new String(Nom);
    var taille = chiffres.length;

    var faux=0;

    //si le numéro de téléphone n'est pas à 10 chiffres
    if (taille>19)
    {
        document.getElementById("tailleNom").innerHTML = "Assurez-vous de ne pas dépasser 19 caractères";
        faux+=1;
    }

    if (faux>0){
        return false;
    }
    else{
        return true;
    }

}

