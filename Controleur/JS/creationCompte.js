
 function validateEmail() {
 var emailID = document.form.Email.value;
 atpos = emailID.indexOf("@");
 dotpos = emailID.lastIndexOf(".");
 var mdp = document.form.password.value;
 var result= /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{7,})/.test(mdp);
 
 if (atpos < 1 || ( dotpos - atpos < 2 ) && !result) {
	 alert("Email incorrect");
	 alert("Le mot de passe doit contenir au moins 7 caractères, une majuscule, une minuscule et un chiffre");
	 document.form.password.focus();
	 return false;
 }

 if (atpos < 1 || ( dotpos - atpos < 2 )) {
 alert( "Email incorrect");
 document.form.Email.focus() ;
 return false;
 }

 if (!result){
	 alert("Le mot de passe doit contenir au moins 7 caractères, une majuscule, une minuscule et un chiffre");
	 document.form.password.focus();
	 return false;
 }
}
 
 function verifMDP(){
	 var mdp = document.form.password.value;
     var result= /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{7,})/.test(mdp);
     if (!result){
         alert("Le mot de passe doit contenir au moins 7 caractères, une majuscule, une minuscule et un chiffre");
         document.form.password.focus();
         return false;
     }
	 
 }

 /*function VerifForm(){
	
	 var email= validateEmail();
	 var MDP = verifMDP();
	 
	 if (email == true && MDP == true){
		 alert("correct");
		return true
	 }
	 else{
		 if(email==false)
		 alert("Email incorrect");
		 if(MDP==false){
			 alert("Mot de passe incorrect")
		 }
	 }
	 return false
 }
	 
 }*/