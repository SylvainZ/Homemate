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


/*fonction qui vérifie que l'utlisateur ait au moins 18 ans et ait coché les CGUs*/
function cgu() {
   var age= calculAge();

    if (document.getElementById("CGU").checked == false) {
        document.getElementById("nonCoche").innerHTML = "Veuillez accepter nos Conditions Générales d'Utilisation";
        return false;
    }
    if (age < 18) {
        document.getElementById("naissance").focus();
        document.getElementById("nonAge").innerHTML="Vous devez avoir plus de 18 ans";
    	return false;
    }
}


function valider_numero() {
    var nombre = document.formulaire.telephone.value;
    var chiffres = new String(nombre);

// Enlever tous les charactères sauf les chiffres
    chiffres = chiffres.replace(/[^0-9]/g, '');

// Le champs est vide
    if ( nombre == "" )
    {
        alert ( "Le champs est vide !" );
        return;
    }

// Nombre de chiffres
    compteur = chiffres.length;

    if (compteur!=10)
    {
        alert("Assurez-vous de rentrer un numéro à 10 chiffres (xxx-xxx-xxxx)");
        return;
    }

    else
    {
        alert("Le numéro me semble bon !");
    }

}






