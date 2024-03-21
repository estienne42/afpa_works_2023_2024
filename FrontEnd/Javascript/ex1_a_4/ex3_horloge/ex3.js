// On récupère les valeurs saisies par l'utilisateur et on créé nos variables :
let heuresInput = document.getElementById("hours");
let minutesInput = document.getElementById("minutes");
let secondesInput = document.getElementById("secondes");
let button = document.querySelector("#button");
let resultElement = document.getElementById("result");
button.addEventListener("click", calculSec);

function calculSec() {
    let secondes = parseInt(secondesInput.value) + 1;
    let minutes = parseInt(minutesInput.value);
    let heures = parseInt(heuresInput.value);

    if (secondes === 60) {
        minutes++;
        secondes = 0;

        if (minutes === 60) {
            minutes = 0;
            heures++;

            if (heures === 24) {
                heures = 0;
            }
        }
    }

    resultElement.textContent = `Dans une seconde, il sera ${heures} heures ${minutes} minutes et ${secondes} secondes !`;
}