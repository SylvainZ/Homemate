
 function validateEmail() {
 var emailID = document.form.Email.value;
 atpos = emailID.indexOf("@");
 dotpos = emailID.lastIndexOf(".");
 var mdp = document.form.password.value;
 
 if (atpos < 1 || ( dotpos - atpos < 2 ) && mdp.length<7) {
	 alert("Email incorrect")
	 alert("Mot de passe trop court (minimum 7 caractères)")
	 document.form.password.focus();
	 return false;
 }

 if (atpos < 1 || ( dotpos - atpos < 2 )) {
 alert( "Email incorrect")
 document.form.Email.focus() ;
 return false;
 }
 if (mdp.length<7){
	 alert("Mot de passe trop court (minimum 7 caractères)")
	 document.form.password.focus();
	 return false;
 }
}
 
 function verifMDP(){
	 var mdp = document.form.password.value;
	 
	 if (mdp.length<7){
		 alert("Mot de passe trop court (minimum 7 caractères)")
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