let mtotal;
let mfourni;
let mrendu;
let n10;
let n5;
let n1;

let btn = document.getElementById("button")
let message10 = document.getElementById("message10")
let message5 = document.getElementById("message5")
let message1 = document.getElementById("message1")

message10.innerHTML = "0";
message5.innerHTML = "0";
message1.innerHTML = "0";

function calculReste() {

    mtotal = parseInt(document.getElementById("mtotal").value);
    mfourni = parseInt(document.getElementById("mfourni").value);

    mrendu = mfourni - mtotal;
    n10 = 0;
    while (mrendu >= 10) {
        n10 = n10 + 1;
        mrendu = mrendu - 10;
    }
    n5 = 0;
    while (mrendu >= 5) {
        n5 = n5 + 1;
        mrendu = mrendu - 5;
    }
    message10.innerHTML = n10;
    message5.innerHTML = n5;
    message1.innerHTML = mrendu;
}
document.getElementById("button").addEventListener("click", calculReste, false);