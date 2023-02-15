<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un employes</title>
</head>
<body>
<?php
        $code = $_GET['code'];
        $host="localhost";
        $user="root";
        $password="";
        $connexion = mysqli_connect($host,$user,$password);
        $bdd="grh";
        $connectbase= mysqli_select_db($connexion,$bdd);
        $requete = "DELETE FROM employes WHERE code = $code ";
        $result = mysqli_query($connexion, $requete);
        if ($result){
            header('Location: http://localhost/serie/allEmlps.php');
            exit();
        } else{
            echo "il y'a une erreur";
        }
    

?>
</body>
</html>