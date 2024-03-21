class Client {
    constructor(nom, prenom, courriel, message) {
        this.nom = nom;
        this.prenom = prenom;
        this.courriel = courriel;
        this.message = message;
    }
}
let nom = document.getElementById("nom").value;
let prenom = document.getElementById("prenom").value;
let courriel = document.getElementById("courriel").value;
let message = document.getElementById("message").value;

let nouveauClient = new Client(nom, prenom, courriel, message);

console.log(nouveauClient);