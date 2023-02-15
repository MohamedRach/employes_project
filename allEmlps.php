<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tous les employés</title>
</head>
<body>
    <table class="container" align="center" border="black">
        <a href = 'formAddEmpl.php'><img src = 'images/add.png' alt = 'ajouter'></a>
        <a href = 'deconnexion.php'><img src = 'images/decon.png' alt = 'deconnexion'></a>
        <tr>
            <td>suprrimer</td>
            <td>modifier</td>
            <td>code</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Sexe</td>
            <td>Adresse</td>
            <td>Date de naissance</td>
            <td>Numero de Service</td>
        </tr>
    
        <?php 
            $host="localhost";
            $user="root";
            $password="";
            $connexion = mysqli_connect($host,$user,$password);
            $bdd="grh";
            $connectbase= mysqli_select_db($connexion,$bdd);
            $requete = "SELECT * FROM employes";
            $result = mysqli_query($connexion, $requete);

            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $code = $row["Code"];
                    $nom = $row["nom"];
                    $prenom = $row["Prénom"];
                    $sexe = $row["sexe"];
                    $addresse = $row["Adresse"];
                    $naissance = $row["dateNaissance"];
                    $service = $row["NumServ"];
                    echo "<tr>";
                    echo "<td><a id = 'delete' href='delEmpl.php?code=$code'><img src='images/Screenshot 2023-02-01 203729.png' alt='supprimer un employes'></a></td>";
                    echo "<td><a id = 'modifier' href='editEmpl.php?code=$code&nom=$nom&prenom=$prenom&sexe=$sexe&addresse=$addresse&naissance=$naissance&service=$service'><img src='images/update.png' alt='modifier un employes'></a></td>";
                    echo "<td>".$code."</td>";
                    echo "<td>".$nom."</td>";
                    echo "<td>".$prenom."</td>";
                    echo "<td>".$sexe."</td>";
                    echo "<td>".$addresse."</td>";
                    echo "<td>".$row["dateNaissance"]."</td>";
                    echo "<td>".$service."</td>";
                    echo "</tr>";
                }
            }
            mysqli_close($connexion);

        ?>
    </table>
    <script src="delete.js"></script>
</body>
</html>
