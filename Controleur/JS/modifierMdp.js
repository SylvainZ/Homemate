function modifyMdp() {
    var mdp1 = document.getElementsByName('mdp1').value;
    var mdp2 = document.getElementsByName('mdp2').value;
    var result1 = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{7,})/.test(mdp1);
    var result2 = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{7,})/.test(mdp2);
    if (!result1 && !result2) {
        alert("Le mot de passe doit contenir au moins 7 caractères, une majuscule, une minuscule et un chiffre");
        document.getElementsByName(mdp1).focus();
        document.getElementsByName(mdp2).focus();
        return false;
    }
}


