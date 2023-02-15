<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un employes</title>
</head>
<body>
    <?php
        $code = $_GET["code"];
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $sexe = $_GET["sexe"];
        $addresse = $_GET["addresse"];
        $naissance = $_GET["naissance"];
        $service = $_GET["service"];

        echo "<form action='updateEmpl.php?' id='form' method='POST'>
            <table align='center' border='black'>
                <input type='hidden' name='code' value=$code>
                <tr>
                    <td >Prénom</td>
                    <td ><input type='text' name='prenom' id='prenom' value = $prenom></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type='text' name='nom' id='nom' value = $nom></td>
                </tr>
                <tr>
                    <td>Sexe</td>
                    <td>
                        <select name='sexe' value = $sexe>
                            <option value='M'>Masculin</option>
                            <option value='F'>Féminin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Date de Naissance</td>
                    <td><input type='date' name='naissance' value = $naissance></td>
                </tr>
                <tr>
                    <td>Addresse</td>
                    <td><input type='text' name='addresse' value = $addresse></td>
                </tr>
                <tr>
                    <td>Services</td>
                    <td><select name='service'>
                            <option value='vente'>Vente</option>
                            <option value='approvisionnement'>Approvisionnement</option>
                            <option value='réclamation'>Réclamation</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><input type='submit' value='modifier' name='submit'></td>
                </tr>  
            </table>
        </form>"
    ?>
        
</body>
</html>