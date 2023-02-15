const supprimer = document.getElementById("delete");
const modifier = document.getElementById("modifier");
supprimer.addEventListener("click", (e) => {
    confirm("Vous etes sure vous voulez supprimer cet employes")
})
modifier.addEventListener("click", (e) => {
    confirm("Vous etes sure vous voulez modifier cet employes")
})