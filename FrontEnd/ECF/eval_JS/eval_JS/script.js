let neutre = document.getElementById("neutre")
let selectImage = document.getElementById("photo");
let imageContainer = document.getElementById("imageContainer");
selectImage.addEventListener("change", function () {
let imageChoisie = selectImage.value;

if(imageChoisie !=="neutre")
    neutre.remove();
    switch (imageChoisie) {
        case "alain":
            imageContainer.innerHTML = '<img src="/img/alain.jpg" alt="">';
            break;
        case "albert":
            imageContainer.innerHTML = '<img src="/img/albert.jpg" alt="">'
            break;
        case "alfred":
            imageContainer.innerHTML = '<img src="/img/alfred.jpg" alt="">';
            break;
        case "alphonse":
            imageContainer.innerHTML = '<img src="/img/alphonse.jpg" alt="">';
            break;
        case "alphonsine":
            imageContainer.innerHTML = '<img src="/img/alphonsine.jpg" alt="">';
            break;
        case "berth":
            imageContainer.innerHTML = '<img src="/img/berth.jpg" alt="">';
            break;
        case "elisabeth":
            imageContainer.innerHTML = '<img src="/img/elisabeth.jpg" alt="">';
            break;
        case "gertrude":
            imageContainer.innerHTML = '<img src="/img/gertrude.jpg" alt="">';
            break;
        case "gilbert":
            imageContainer.innerHTML = '<img src="/img/gilbert.jpg" alt="">';
            break;
        case "gilberte":
            imageContainer.innerHTML = '<img src="/img/gilberte.jpg" alt="">';
            break;
        case "hugh":
            imageContainer.innerHTML = '<img src="/img/hugh.jpg" alt="">';
            break;
        case "jacques":
            imageContainer.innerHTML = '<img src="/img/jacques.jpg" alt="">';
            break;
        case "john":
            imageContainer.innerHTML = '<img src="/img/john.jpg" alt="">';
            break;
        default:
    }   
    }
);
