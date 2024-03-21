
// création des variables utiles
let sexe,age;

// do{
//      sexe = prompt("êtes-vous un homme ou une femme ? (F/H)");
//     console.log(sexe);
// } while (sexe !== "F" && sexe !== "H")


// do{
//     age = parseInt(prompt("Quel âge avez vous ?"))
// } while ( age<0 || isNaN(age))



// algorithme
let inputAge = document.getElementById("age")
 let inputSexe = document.getElementById("sexe")
 let btn= document.querySelector("main button")
btn.addEventListener("click", calculImpots)
   

function calculImpots()  {
    
    age = inputAge.value;
    sexe = inputSexe.value;


    if(sexe==="F"){
        if ( age<18 || age >35){
            alert("Vous n'êtes pas imposable.")
        }
        else{
            alert("Vous êtes imposable")
        }
    } else {
        if(age<21){
            alert("Vous n'êtes pas imposable.")
        } else {
            alert("Vous êtes imposable.")
        }
    }
}
   