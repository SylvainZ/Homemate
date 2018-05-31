<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <title> Locataire/Propriétaire</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="vue/CSS/styleLocProp.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
	
</head>

<body >

<figure>
    <img src="Images/homemate2.png" alt="image du logo">

</figure>


<div id="bloc">

    <h1 class="center">Locataire/Propriétaire</h1>

    <section>
        <h2>Données personnelles</h2>
        <form name = "form" action="../Modele/locataireProprietaire.php" method="post" onsubmit="return cgu()">

            <div id="ligne1">

                <label for="dateDeNaissance">
                    Date de naissance<br>
                    <input type="date" name="dateDeNaissance" class="champ">
                </label><br><br>

                <label for="tel">
                    Numéro de téléphone<br/>
                    <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="tel" class="champ">
                </label><br>
            </div><br>

            <div id="ligne2">
                <select name="statut" id="champ" class="champ">
                    <option value="proprietaire">proprietaire</option>
                    <option value="locataire">locataire</option>
                </select><br /><br/>
            </div>

            <h2>Adresse personnelle</h2>

            <div id="ligne3">

                <div class="log">
                    <label for="numLogement">
                        Numéro de logement<br>
                        <input type="number" name="numLogement" class="champ">
                    </label >
                </div>

                <div class="etage">
                    <label for="numEtage">
                        Numéro d'étage<br>
                        <input type="number" name="numEtage" size="40" class="champ">
                    </label><br>
                </div>
            </div>
            <br>

            <div id="ligne4">
                <label for="numRue">
                    Numéro de Rue <br>
                    <input type="number" size="40" name="numRue" class="champ">
                </label><br>

                <div  class="bis num">
                    <label for="bis" >
                        Bis
                        <input type="checkbox" name="numBis" value="bis" class="champ"/>
                    </label>
                </div>

                <div class="bis">
                    <select name="prefixRueBdAve" id="champ" class="champ">
                        <option value="rue">rue</option>
                        <option value="bd">boulevard</option>
                        <option value="ave">avenue</option>
                        <option value="imp">impasse</option>
                        <option value="pont">pont/option>
                    </select>
                </div>

            </div><br>

            <div id="ligne5">

                <div class="route">
                    <label for="nomRoute">
                        Nom de Rue, Boulevard, Avenue <br/>
                        <input type="text" name="nomRoute" class="champ1"/>
                    </label><br>
                </div>

                <div class="codePostal">
                    <label for="postal">
                        Code Postal <br>
                        <input type="text" name="postal" class="champPostal champ1"/>
                    </label><br>
                </div>
            </div>

            <div id="ligne6">

                <div class="ville">
                    <label for="Ville">
                        Ville <br/>
                        <input type="text" name="Ville" class="champ1 longueur"/>
                    </label><br>
                </div>

                <div class="pays">
                    <label for="pays">
                        Pays <br>
                        <input type="text" name="pays" class="champ1 longueur"/>
                    </label> <br>
                </div>

            </div>

            <h2>Informations sur l'habitation</h2>

            <div id="ligne7">
                <div class="typeHab">
                    <select name="typedHab" id="champ" class="champ">
                        <option value="Type">Type d'habitation</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                    </select>
                </div>

                <div class="surface">
                    <label for="surface">
                        Surface <br>
                        <input type="number" name="surface"/>
                    </label> <br>
                </div>
            </div> <br>

            <div id="ligne8">

                <div class="nbPiece">
                    <label for="pièce">
                        Nombre de pièce <br>
                        <input type="number" name="pièce" size="25" class="champ"/>
                    </label>
                </div>

            </div>
            
            <br>
            <div id ="cgu">
            
            			<input id="CGU" type="checkbox" name="CGU" value="1" />
                        <label for = "CGU" class="CGU">En cochant, vous acceptez nos Conditions G�n�rales d'Utilisation</label>
                        <div id="nonCoche"></div>
                   
            </div>
            <br>
            <p class="center"> <input type="submit" value="Valider" class="Valider" size="1000"></p>
        </form>
    </section>
    <br>
</div>

<script type="text/javascript" src="../Controleur/locataireproprietaire.js"></script>
<footer>
    <p>Copyright 2018 HomeMate | Tous droits réservés</p>
</footer>
</body>
</html>