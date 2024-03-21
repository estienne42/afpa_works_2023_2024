// prix des photocopies :
// 0.1€ les 10 premières;
// puis 0.09 les 20 suivantes;
// puis 0.08 au-delà
let reponse;
let nombre;
let inputNombre;
let btn = document.querySelector("#bouton");
btn = addEventListener("click", calculPrix);

function calculPrix() {
    let prix;
    // Le .value indique (quand on pointe de l'HTML) d'assigner la valeur à la variable, et non tout le reste.
    nombre = document.getElementById("photocop").value;
    if (nombre <= 10) {
        prix = nombre * 0.1
    } else if (nombre < 31) {
        prix = (nombre - 10) * 0.09 + 1
    } else {
        prix = (nombre - 30) * 0.08 + 2.8
    }
    reponse = document.getElementById("reponse");
    reponse.innerHTML= "<p>ça coute : </p>" + prix;
}




// alert(annoncePrix)