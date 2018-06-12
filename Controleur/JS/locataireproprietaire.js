function cguf(){
	/*var cgu = document.form.CGU.value;
	
	if(cgu==null)
	{
		alert("Veuillez accepter nos Conditions Générales d'Utilisation")
		document.form.password.CGU.focus();
		return false;
	}
	
	else
		{
		return true;
		}*/
	
	if(document.getElementById("CGU").checked==true){
		return true;
	}
	
	else{
		document.getElementById("nonCoche").innerHTML="Veuillez accepter nos Conditions Générales d'Utilisation";
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


    var tel = document.form.numTel.value;
    var verifTel= /([0-9]{10})/.test(tel);

    var postal = document.form.codePostal.value;
    var verifCodePostal= /([0-9]{5})/.test(postal);

   if (document.getElementById("CGU").checked == false) {
        document.getElementById("nonCoche").innerHTML = "Veuillez accepter nos Conditions Générales d'Utilisation";
        return false;
    }
    if (age < 18) {
        document.getElementById("naissance").focus();
        document.getElementById("nonAge").innerHTML="Vous devez avoir plus de 18 ans";
    	return false;
    }

   if (!verifTel)
   {
       document.getElementsByName('tel').focus();
       document.getElementById("nonNum").innerHTML = "Assurez-vous de rentrer un numéro à 10 chiffres";
       return false;
   }

    if (!verifCodePostal) {
        document.getElementsByName('postal').focus();
        document.getElementById("nonPostal").innerHTML = "Veuillez rentrer un code postal à 5 chiffres";
        return false;
    }

}







