class Car {
    marque;
    modele;
    nbPortes;
    vitesseActuelle;
    statut;

    constructor(marque, modele, nbPortes, vitesseActuelle, statut) {
        this.marque = marque;
        this.modele = modele;
        this.nbPortes = nbPortes;
        this.vitesseActuelle = 0;
        this.statut = false;
    }
}