function verifPiece(){
    var Nom= document.getElementById('nomPiece').value;
    var chiffres = new String(Nom);
    var taille = chiffres.length;

    var faux=0;

    alert(taille);
    //si le numéro de téléphone n'est pas à 10 chiffres
    if (taille>19)
    {
    	
        document.getElementById("tailleNom").innerHTML = "Assurez-vous de ne pas dépasser 19 caractères";
        faux+=1;
    }

    if (faux>0){
    	alert('faux');
        return false;
    }
    else{
    	alert('vrai');
    	return true;
    }
	
}