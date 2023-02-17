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
    $requete = "SELECT * FROM users";
    $result = mysqli_query($connexion, $requete);
    session_start();
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $loginV = $row["login"];
            $passwordV = $row["password"];
            $type = $row["type"];
            if($loginV == $login && $passwordV == $password){
                $_SESSION['loggedIn'] = true;
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                if($type == "AD"){
                    header('Location: http://localhost/serie/allEmlps.php');
                    exit(); 
                    break;
                } else {
                    header('Location: http://localhost/serie/profile.php');
                    exit();
                    break;
                }
            } else {
                $_SESSION['loggedIn'] = false;   
            }
 
        }
        if($_SESSION['loggedIn'] == false){
            header('Location: http://localhost/serie/index.html');
            exit();
        }
        
    }
    mysqli_close($connexion);
?>