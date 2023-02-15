<?php
    $host="localhost";
    $user="root";
    $password="";
    $connexion = mysqli_connect($host,$user,$password);
    //if($connexion==FALSE)
     //   echo "La connexion au serveur a échouée";
    //else echo "Connexion Réussie.";
    $bdd="grh";
    $connectbase= mysqli_select_db($connexion,$bdd);
    //if($connectbase==FALSE)
    //    echo "La base $bdd est inaccessible";
    //else echo "La base $bdd est accessible";

    if ( isset( $_POST['submit'] ) ) { 
        $prenom= $_POST['prenom']; 
        $nom = $_POST['nom']; 
        $naissance = $_POST['naissance'];
        $sexe = $_POST['sexe'];
        $addresse = $_POST['addresse'];
        $service = $_POST['service'];
    } else echo "nothing submitted";
    $requete = "INSERT INTO employes (Nom,Prénom,sexe,Adresse,dateNaissance,NumServ) VALUES ('$nom', '$prenom', '$sexe',  '$addresse', '$naissance', (SELECT NumServ FROM services WHERE designationServ = '$service'))";
    $result = mysqli_query($connexion, $requete);
    if($result){
        header('Location: http://localhost/serie/formAddEmpl.php');
        exit();
    } else {
        echo "error";
    }
    mysqli_close($connexion);
?>