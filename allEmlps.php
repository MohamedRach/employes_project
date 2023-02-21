<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/table.css">
    <title>tous les employés</title>
</head>
<body>
        <div class="liens">
            <a href = 'formAddEmpl.php'><img src = 'images/add.png' alt = 'ajouter'></a>
            <p>ajouter un employes</p>
            <a href = 'deconnexion.php'><img src = 'images/decon.png' alt = 'deconnexion'></a>
            <p>deconnecter</p>
        </div>
    <table class="container" align="center">
        <tr class="head-row">
            <td class="content">suprrimer</td>
            <td class="content">modifier</td>
            <td class="content">code</td>
            <td class="content">Nom</td>
            <td class="content">Prénom</td>
            <td class="content">Sexe</td>
            <td class="content">Adresse</td>
            <td class="content">Date de naissance</td>
            <td class="content">Numero de Service</td>
        </tr>
    
        <?php
            session_start();
            if(!(isset($_SESSION['login']))){
                header('Location: http://localhost/serie/index.html');
            }
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
                    echo "<tr class = 'body-row'>";
                    echo "<td class = 'content'><a id = 'delete'><img src='images/Screenshot 2023-02-01 203729.png' alt='supprimer un employes'></a></td>";
                    echo "<td class = 'content'><a id = 'modifier'><img src='images/update.png' alt='modifier un employes'></a></td>";
                    echo "<td class = 'content'>".$code."</td>";
                    echo "<td class = 'content'>".$nom."</td>";
                    echo "<td class = 'content'>".$prenom."</td>";
                    echo "<td class = 'content'>".$sexe."</td>";
                    echo "<td class = 'content'>".$addresse."</td>";
                    echo "<td class = 'content'>".$row["dateNaissance"]."</td>";
                    echo "<td class = 'content'>".$service."</td>";
                    echo "</tr>";
                }
            }
            echo "<script>
                    let ButtonSupprimer = document.querySelectorAll('#delete');
                    let ButtonModifier = document.querySelectorAll('#modifier');
                    ButtonSupprimer.forEach((button) => {
                        button.addEventListener('click', (e) => {
                            if(confirm('Vous etes sure vous voulez supprimer cet employes') == true){
                                button.setAttribute('href', 'delEmpl.php?code=$code');
                            }  
                        })
                    })
                    ButtonModifier.forEach((button) => {
                        button.addEventListener('click', (e) => {
                            if(confirm('Vous etes sure vous voulez modifier cet employes') == true){
                                button.setAttribute('href', 'editEmpl.php?code=$code&nom=$nom&prenom=$prenom&sexe=$sexe&addresse=$addresse&naissance=$naissance&service=$service');
                            }    
                        })
                    })
                </script>";
            mysqli_close($connexion);

        ?>
    </table>
    
</body>
</html>
