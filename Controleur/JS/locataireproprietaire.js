//fonction qui vérifie le numéro de téléphone et le code postal lorsqu'il modifie son profil
function modifProfil(){
    var tel = document.getElementById('numTel').value;
    var chiffres = new String(tel);
    var taille = chiffres.length;

    var postal = document.getElementById('codePostal').value;
    var chiffres2 = new String(postal);
    var taille2 = chiffres2.length;

    var faux=0;

    //si le numéro de téléphone n'est pas à 10 chiffres
    if (taille!=10)
    {
        document.getElementById("nonNum").innerHTML = "Assurez-vous de rentrer un numéro à 10 chiffres";
        faux+=1;
    }

    //si le code postal n'est pas à 5 chiffres
    if (taille2!=5)
    {
        document.getElementById("nonPostal").innerHTML = "Veuillez rentrer un code postal à 5 chiffres";
        faux+=1;
    }

    if (faux>0){
        return false;
    }
	
}

/*Fonction qui calcule l'age de l'utilisateur*/
function calculAge() {
    var date= document.getElementById('naissance').value;
    var dt= date.split('-');
    var maintenant=new Date();
    var jour=maintenant.getDate();
    var mois=maintenant.getMonth()+1;
    var an=maintenant.getFullYear();
    var age = an-dt[0];
    if (age<=0) {
    }
    else {
        if (dt[1]>mois) {
            age-=1;
        }
        else if (dt[1]==mois && dt[2]>jour) {
            age-=1;
        }
        else {
        }
    }
    return age;
}


/*fonction qui vérifie que l'utlisateur ait au moins 18 ans et ait coché les CGUs et le numéro de téléphone*/
function cgu() {
   var age= calculAge();

    var tel = document.getElementById('numTel').value;
    var chiffres = new String(tel);
    var taille = chiffres.length;

    var postal = document.getElementById('codePostal').value;
    var chiffres2 = new String(postal);
    var taille2 = chiffres2.length;

    var faux=0;

    //si le numéro de téléphone n'est pas à 10 chiffres
    if (taille!=10)
    {
        document.getElementById("nonNum").innerHTML = "Assurez-vous de rentrer un numéro à 10 chiffres";
        faux+=1;
    }

    //si le code postal n'est pas à 5 chiffres
    if (taille2!=5) {

        document.getElementById("nonPostal").innerHTML = "Veuillez rentrer un code postal à 5 chiffres";
        faux+=1;
    }

    //s'il a bien coché les CGUs
   if (document.getElementById("CGU").checked == false) {
        document.getElementById("nonCoche").innerHTML = "Veuillez accepter nos Conditions Générales d'Utilisation";
        faux+=1;
    }

    //s'il a bien au moins 18 ans
    if (age < 18) {
        document.getElementById("naissance").focus();
        document.getElementById("nonAge").innerHTML="Vous devez avoir plus de 18 ans";
        faux+=1;
    }

    if (faux>0){
       return false;
    }

}







