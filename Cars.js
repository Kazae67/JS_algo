// Class 🏠🧔👩


class Car {
    
    // Construt 🔒
    constructor(marque, modele, nbPortes) {
        this._marque = marque;
        this._modele = modele;
        this._nbPortes = nbPortes;
        this._vitesseActuelle = 0;
        this._statut = true;
    }

    // Getters 🔑
    get marque(){
        return this._marque;
    }

    get modele(){
        return this._modele;
    }
    
    get nbPortes(){
        return this._nbPortes;
    }

    get vitesseActuelle(){
        return this._vitesseActuelle;
    }

    get statut() {
        return this._statut() ? "démarré" : "arrêté";
    }

    // Setters ⚙️
    set marque(marque){
        this._marque = marque;
    }

    set modele(modele){
        this._modele = modele;
    }

    set nbPortes(nbPortes){
        this._nbPortes = nbPortes;
    }

    set setVitesseActuelle(vitesse){
        this._vitesseActuelle = vitesse;
    }

    set statut(statut){
        this._statut = statut;
    }

    // Démarrer ✔
    Demarrer(){
        if(this._statut){
            document.getElementById("demarrer").innerHTML = "Le véhicule [" + this._marque + " " + this._modele +  "] est déjà démarré <br>";
        }else {
            this._statut = true;
            document.getElementById("demarrer").innerHTML = "Le véhicule [" + this._marque + " " + this._modele + "]: démarre <br>";
        }
        
    }

    // Démarrer 2 ✔ 
    DemarrerV2(){
        if(this._statut){
            document.getElementById("demarrerV2").innerHTML = "Le véhicule [" + this._marque + " " + this._modele +  "] est déjà démarré <br>";
        }else {
            this._statut = true;
            document.getElementById("demarrerV2").innerHTML = "Le véhicule [" + this._marque + " " + this._modele + "]: démarre <br>";
        }
        
    }

    // Start ✔ 
    Start() {
        if(this._statut) {
            document.getElementById("start").innerHTML = "";
        } else {
            this.statut = true;
            document.getElementById("start").innerHTML = "";
        }
    }

    // Accélérer 🚗💨
    Accelerer() {
        if(this._statut) {
            this._vitesseActuelle;
            document.getElementById("accelerer").innerHTML = "Le véhicule [" + this._marque + " " + this._modele + "]: accélère de " + this._vitesseActuelle + " km /h <br>";
        } else {
            document.getElementById("accelerer").innerHTML = "Pour accélérer, il faut démarrer le véhicule [" + this._marque + " " + this._modele + "] !<br>";
        }
    }

    // Accélérer 2 🚗💨
    AccelererV2() {
        if(this._statut) {
            this._vitesseActuelle += this._vitesseActuelle;
            document.getElementById("accelererV2").innerHTML = "Le véhicule [ " + this._marque + " " + this._modele + "]: veut accélerer de " + this._vitesseActuelle + "<br>";
        } else {
            document.getElementById("accelererV2").innerHTML = "Pour accélérer, il faut démarrer le véhicule [" + this._marque + " " + this._modele + "] !<br>";
        }
    }
    

    // Stop⚠
    Stop() {
        if(this._statut == false) {
            document.getElementById("stop").innerHTML = "";
        } else {
            this._statut = false;
            this._vitesseActuelle = 0;
            document.getElementById("stop").innerHTML = "";
        }
    }
    // Stopper ⚠
    Stopper() {
        if(this._statut == false) {
            document.getElementById("stopper").innerHTML = "Le véhicule: [" + this_marque + "] est déjà stoppé <br>";
        } else {
            this._statut = false;
            this._vitesseActuelle = 0;
            document.getElementById("stopper").innerHTML = "Le véhicule [" + this._marque + " " + this._modele + "]: est stoppé <br>";
        }
    }

} 

var v1 = new Car("Peugeot", "408", 5);
var v2 = new Car("Citroën", "C4", 3)
v1.setVitesseActuelle = 10;
v1.Demarrer();
v1.Accelerer();
v2.DemarrerV2();
v2.Stopper();
console.log(v1);