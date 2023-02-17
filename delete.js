const supprimer = document.getElementById("delete");
const modifier = document.getElementById("modifier");
supprimer.addEventListener("click", (e) => {
    if(confirm("Vous etes sure vous voulez supprimer cet employes") == true){

    } else {
        supprimer.removeAttribute('href');
    }
})
modifier.addEventListener("click", (e) => {
    confirm("Vous etes sure vous voulez modifier cet employes")
})