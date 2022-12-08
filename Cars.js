// Class 🏠🧔👩
class Car {
    marque;
    modele;
    nbPortes;
    vitesseActuelle;
    statut;
    
    // Construt 🔒
    constructor(marque, modele, nbPortes) {
        this.marque = marque;
        this.modele = modele;
        this.nbPortes = nbPortes;
        this.vitesseActuelle = 0;
        this.statut = false;
    }

    // Getters 🔑
    get marque(){
        return this.marque();
    }

    get modele(){
        return this.modele();
    }
    
    get nbPortes(){
        return this.nbPortes();
    }

    get vitesseActuelle(){
        return this.vitesseActuelle();
    }

    get statut() {
        return this.statut() ? "démarré" : "arrêté";
    }

    
}