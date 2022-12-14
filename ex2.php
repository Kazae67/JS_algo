<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
    <title>JS ALGO (partie 2)</title>
</head>
<body>

    <h1><b>Exercice 2</b></h1>
    <p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
        s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
        une fonction personnalisée.</p>
    <p id="ex2"></p>

    <h1><b>Exercice 3</b></h1>
    <p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
        dans un nouvel onglet (_blank)</p>
    <button onclick ="exe3()">Lien Elan Formation</button>

    <h1><b>Exercice 5</b></h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
        précisant le nom des champs associés.</p>

    <FORM NAME="nom">
        <INPUT TYPE="text" placeholder="NOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NOM'" NAME="input" VALUE="">
        <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_nom(nom)">
    </FORM>
    <FORM NAME="prenom">
        <INPUT TYPE="text" placeholder="PRÉNOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PRÉNOM'" NAME="input" VALUE="">
        <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_prenom(prenom)">
    </FORM>
    <FORM NAME="ville">
        <INPUT TYPE="text" placeholder="VILLE" onfocus="this.placeholder = ''" onblur="this.placeholder = 'VILLE'" NAME="input" VALUE="">
        <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_ville(ville)">
    </FORM>
    
    <h1>Exercice 6</h1>
    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
        de valeurs.</p>

       <FORM NAME="form5">
            <SELECT NAME="list">
                <OPTION VALUE="1">Monsieur
                <OPTION VALUE="2">Madame
                <OPTION VALUE="3">Mademoiselle
            </SELECT>
            <INPUT TYPE="button"NAME="b" VALUE="Genre" onClick="liste(form5)"> 
        </FORM>

    <h1>Exercice 7</h1>
    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
        <FORM NAME="form4">
            <INPUT TYPE="CHECKBOX" NAME="check1" VALUE="1">Choix numéro 1<BR>
            <INPUT TYPE="CHECKBOX" NAME="check2" VALUE="2">Choix numéro 2<BR>
            <INPUT TYPE="CHECKBOX" NAME="check3" VALUE="3">Choix numéro 3<BR>
            <INPUT TYPE="CHECKBOX" NAME="check4" VALUE="4">Choix numéro 4<BR>
            <INPUT TYPE="button"NAME="but" VALUE="Récapituler" onClick="reponse(form4)">
        </FORM>

    <h1><b>Exercice 8</b></h1>
    <p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
        Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran</p>
    <div class="container" id="imageChien"></div>
    
    <h1><b>Exercice 9</b></h1>
    <p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
        valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>
    Selectionnez votre choix :
    <FORM NAME="form3"><BR>
    <INPUT TYPE="radio" NAME="choix" VALUE="1">Masculin<BR>
    <INPUT TYPE="radio" NAME="choix" VALUE="2">Féminin<BR>
    <INPUT TYPE="radio" NAME="choix" VALUE="3">Autre<BR><BR>
    <INPUT TYPE="button"NAME="but" VALUE="Afficher votre genre" onClick="choixprop(form3)">
    </FORM>
    
    <h1><b>Exercice 10</b></h1>
    <p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
        « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
        Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
        de validation (submit).
        </p>
        <FORM NAME="name">
            <INPUT TYPE="text" placeholder="NOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NOM'" NAME="input" VALUE="">
            <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_name(name)">
        </FORM>
        <FORM NAME="nickname">
            <INPUT TYPE="text" placeholder="PRÉNOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PRÉNOM'" NAME="input" VALUE="">
            <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_nickname(nickname)">
        </FORM>
        <FORM NAME="email">
            <INPUT TYPE="text" placeholder="EMAIL" onfocus="this.placeholder = ''" onblur="this.placeholder = 'EMAIL'" NAME="input" VALUE="">
            <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_email(email)">
        </FORM>
        <FORM NAME="town">
            <INPUT TYPE="text" placeholder="VILLE" onfocus="this.placeholder = ''" onblur="this.placeholder = 'VILLE'" NAME="input" VALUE="">
            <INPUT TYPE="button" NAME="bouton" VALUE="Contrôler" onClick="_town(town)">
        </FORM>

        
        <FORM NAME="formGenre"><br>
        <INPUT TYPE="radio" NAME="choix" VALUE="1">Homme
        <INPUT TYPE="radio" NAME="choix" VALUE="2">Femme
        <INPUT TYPE="radio" NAME="choix" VALUE="3">Autre
        <INPUT TYPE="button"NAME="butt" VALUE="Afficher  genre" onClick="choixGenre(formGenre)">
        </FORM>

        <FORM NAME="choixJob"><br>
            <SELECT NAME="list">
                <OPTION VALUE="1">Développeur Logiciel
                <OPTION VALUE="2">Designer web
                <OPTION VALUE="3">Intégrateur 
                <OPTION VALUE="3">Chef de projet 
            </SELECT>
            <INPUT TYPE="button"NAME="b" VALUE="Afficher votre métier" onClick="_liste(choixJob)"> 
        </FORM>

    <h1><b>Exercice 13</b></h1>
    <p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
        vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
        des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
        instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
        véhicule. </p>
        <button onclick ="page_cars()">Voiture</button>

        

        <footer>
            <p id="result"></p>
            <script>
                // Exercice 3
                function ordreCapitales(pays, rappeler, ordre) {
                    var capitales = [];
                  
                    for (var ville in pays) capitales.push([ville, pays[ville]]);
                  
                    capitales.sort(function(a, b) {
                      return a[1] < b[1] ? 1 : a[1] > b[1] ? -1 : 0
                    });
                  
                    var length = capitales.length;
                    while (length--) rappeler.call(ordre, capitales[length][0], capitales[length][1]);
                  }
                   
                  ordreCapitales({
                    France: "Paris",
                    USA: "Washington",
                    Allemagne: "Berlin",
                    Italie: "Rome",
                  }, function(ville, value) {
                    document.getElementById('ex2').innerHTML += `${ville}: ${value}<br>`
                  });

                function exe3(){
                // location.href("https://elan-formation.eu/accueil") pour ouvrir dans la même page
                    window.open("https://elan-formation.eu/accueil", "_blank");
  
                  }

                // Exercice 5
                function _nom(nom){
                    var _nom = document.nom.input.value;
                    alert("Nom : " + _nom);
                }

                function _prenom(prenom){
                    var test = document.prenom.input.value;
                    alert("Prénom : " + test);
                }

                function _ville(ville){
                    var test = document.ville.input.value;
                    alert("Ville : " + test);
                }

                // Exercice 6
                function liste(form5) {
                    if (form5.list[0].selected) { alert("Vous êtes un homme")};
                    if (form5.list[1].selected) { alert("Vous êtes une femme")};
                    if (form5.list[2].selected) { alert("Vous êtes une demoiselle")};
                    }

                // Exercice 7
                function reponse(form4) {
                    if ( (form4.check1.checked) == true){ 
                        alert("Choix 1") 
                    }
                    if ( (form4.check2.checked) == true){
                        alert("Choix 2") 
                    }
                    if ( (form4.check3.checked) == true){
                        alert("Choix 3") 
                    }
                    if ( (form4.check4.checked) == true){
                        alert("Choix 4") 
                    }
                }

                // Exercice 8
                let url_chien = "<img src='http://my.mobirise.com/data/userpic/764.jpg'>";
                let result = url_chien.repeat(4);
                
                document.getElementById("imageChien").innerHTML = result;

                // Exercice 9
                function choixprop(form3) {
                    if (form3.choix[0].checked) { alert("Vous êtes un grand garçon") };
                    if (form3.choix[1].checked) { alert("Salutation gente dame ")};
                    if (form3.choix[2].checked) { alert("Il faudrait bien trouver un jour")};
                    }

                // Exercice 10

                // Champs
                function _name(name){
                    var name = document.name.input.value;
                    alert("Nom : " + name);
                }

                function _nickname(nickname){
                    var nickname = document.nickname.input.value;
                    alert("Prénom : " + nickname);
                }
                function _email(email){
                    var email = document.email.input.value;
                    alert("Email : " + email);
                }

                function _town(town){
                    var test = document.town.input.value;
                    alert("Ville : " + test);
                }

                // Radio
                function choixGenre(formGenre) {
                    if (formGenre.choix[0].checked) { alert("Vous êtes un grand garçon") };
                    if (formGenre.choix[1].checked) { alert("Salutation gente dame ")};
                    if (formGenre.choix[2].checked) { alert("Il faudrait bien trouver un jour")};
                }

                function _liste(choixJob) {
                    if (choixJob.list[0].selected) { alert("Vous êtes un Développeur en Logiciel")};
                    if (choixJob.list[1].selected) { alert("Vous êtes Designer web")};
                    if (choixJob.list[2].selected) { alert("Vous êtes Intégrateur")};
                    if (choixJob.list[3].selected) { alert("Vous êtes Chef de projet")};
                }

                // Exercice 13
                function page_cars(){
                    window.open("cars.php", "_blank");
                }

          

                </script>

            </script>

        </footer>
</body>
</html>
