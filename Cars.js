// Class 🏠🧔👩
class Car {
    // Construt 🔒
    constructor(marque, modele, nbPortes) {
        this._marque = marque;
        this._modele = modele;
        this._nbPortes = nbPortes;
        this._vitesseActuelle = 0;
        this._statut = false;
    }

    // Getters 🔑
    get marque(){
        return this._marque();
    }

    get modele(){
        return this._modele();
    }
    
    get nbPortes(){
        return this._nbPortes();
    }

    get vitesseActuelle(){
        return this._vitesseActuelle();
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

    set vitesseActuelle(vitesseActuelle){
        this._vitesseActuelle = vitesseActuelle;
    }

    set statut(statut){
        this._statut = statut;
    }

    // Démarrer ✔
    getDemarrer(){
        if(this.statut){
            document.getElementById("demarrer").innerHTML = "Le véhicule " + this.marque + " est déjà démarré <br>";
        }else {
            this.statut = true;
            document.getElementById("demarrer").innerHTML = "Le véhicule [" + this.marque + " " + this.modele + "]: démarre <br>";
        }
    }

    





            
    


}