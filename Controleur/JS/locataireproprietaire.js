function cgu(){
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