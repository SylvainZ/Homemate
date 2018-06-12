<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <title> Locataire/Propriétaire</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="vue/CSS/styleLocProp.css">
    <link rel="stylesheet" href="Vue/CSS/all.css">
	
</head>

<body >

<header>
    <?php include("Vue/header.php") ?>

</header>

<div id="page">
<div id="bloc">

    <h1 class="center">Locataire/Propriétaire</h1>

    <section>
        <div id="block1">
        <h2 id="titre1">Données personnelles</h2>
        <form name = "form" action="index.php?cible=creerUnCompteBis" method="post" onsubmit="return cgu()">

           <table>
               <tbody>
                    <tr>
                        <td>
                            <div class="date">
                            <label for="dateDeNaissance">
                                Date de naissance<br>
                                <input type="date" name="dateDeNaissance" id="naissance" class="champ">
                                <div id="nonAge"></div>
                            </label>
                            </div>
                        </td>

                        <td>
                            <div class="numTel">
                            <label for="tel">
                                Numéro de téléphone<br/>
                                <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="tel" class="champ">
                            </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="statut">
                            <select name="statut" id="champ" class="champ">
                                <option value="proprietaire">proprietaire</option>
                                <option value="locataire">locataire</option>
                            </select>
                            </div>
                        </td>
                    </tr>
               </tbody>
           </table>

        <div id="block2">
            <h2 id="titre2">Adresse personnelle</h2>

            <table>
                <tbody>
                    <tr>
                        <td>
                            <div class="log">
                            <label for="numLogement">
                                Numéro de logement<br>
                                <input type="number" name="numLogement" class="champ">
                            </label >
                            </div><br>
                        </td>

                        <td>
                            <div class="etage">
                            <label for="numEtage">
                                Numéro d'étage<br>
                                <input type="number" name="numEtage" size="40" class="champ">
                            </label>
                            </div><br>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="numRue">
                            <label for="numRue">
                                Numéro de Rue <br>
                                <input type="number" size="40" name="numRue" class="champ">
                            </label>
                            </div><br><br>
                        </td>

                        <td>
                            <div class="bis">
                            <label for="bis">
                                Bis
                                <input type="checkbox" name="numBis" value="bis" class="champ"/>
                            </label>
                            </div><br><br>
                        </td>

                        <td>
                            <div class="typeRue">
                            <select name="prefixRueBdAve" id="champ" class="champ">
                                <option value="rue">rue</option>
                                <option value="bd">boulevard</option>
                                <option value="ave">avenue</option>
                                <option value="imp">impasse</option>
                                <option value="pont">pont</option>
                            </select>
                            </div><br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="route">
                            <label for="nomRoute">
                                Nom de Rue, Boulevard, Avenue <br/>
                                <input type="text" name="nomRoute" class="champ1"/>
                            </label><br><br>
                            </div>
                        </td>

                        <td>
                            <div class="codePostal">
                            <label for="postal">
                                Code Postal <br>
                                <input type="number" name="postal" class="champPostal champ1"/>
                            </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="ville">
                            <label for="Ville">
                                Ville <br/>
                                <input type="text" name="Ville" class="champ1 longueur"/>
                            </label>
                            </div>
                        </td>

                        <td>
                            <div class="pays">
                            <label for="pays">
                                Pays <br>
                                <input type="text" name="pays" class="champ1 longueur"/>
                            </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


        <div id="block3">
        <h2 id="titre3">Informations sur l'habitation</h2>

            <table>
                <tbody>
                <tr>
                    <td>
                        <div class="typeHab">
                        <select name="typedHab" id="champ" class="champ">
                            <option value="Type">Type d'habitation</option>
                            <option value="Appartement">Appartement</option>
                            <option value="Maison">Maison</option>
                        </select>
                        </div>
                    </td>

                    <td>
                        <div class="surface">
                        <label for="surface">
                            Surface <br>
                            <input type="number" name="surface"/>
                        </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="nbPiece">
                        <label for="pièce">
                            Nombre de pièce <br>
                            <input type="number" name="piece" class="champ"/>
                        </label>
                        </div><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div id="cgu">
                        <input id="CGU" type="checkbox" name="CGU" value="1" />
                        <label for = "CGU" class="CGU">En cochant, vous acceptez nos Conditions G�n�rales d'Utilisation</label>
                            <div id="nonCoche"></div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
            <br>
            <p class="center"> <input type="submit" value="Valider" class="Valider" size="1000"></p>
        </form>
    </section>
    <br>
</div>
</div>
<script type="text/javascript" src="Controleur/JS/locataireproprietaire.js"></script>

<footer>
    <?php include("Vue/footer.php") ?>
</footer>
</body>
</html>