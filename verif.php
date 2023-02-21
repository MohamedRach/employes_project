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
        $login= $_POST['login']; 
        $password = $_POST['password']; 
    }
    $requete = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
    $result = mysqli_query($connexion, $requete);
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        session_start();
        $_SESSION["login"] = $row['login'];
        $_SESSION["password"] = $row['password'];
    }else{
        echo "something is wrong";
    }
    
    if($row['type'] == "AD"){
        header('location:  http://localhost/serie/allEmlps.php');
    }else {
        header('location:  http://localhost/serie/profile.php');
    }
    
    mysqli_close($connexion);
?>