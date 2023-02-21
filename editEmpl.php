<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form.css">
    <title>Modifier un employes</title>
</head>
<body>
    <?php
        session_start();
        if(!(isset($_SESSION['login']))){
            header('Location: http://localhost/serie/index.html');
        }
        $code = $_GET["code"];
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $sexe = $_GET["sexe"];
        $addresse = $_GET["addresse"];
        $naissance = $_GET["naissance"];
        $service = $_GET["service"];

        echo "<form action='updateEmpl.php?' id='form' method='POST'>
            <table class = 'container' align='center'>
                <input type='hidden' name='code' value=$code>
                <tr>
                    <td class='column'>Prénom</td>
                    <td class='column'><input type='text' name='prenom' id='prenom' value = $prenom></td>
                </tr>
                <tr>
                    <td class='column'>Nom</td>
                    <td class='column'><input type='text' name='nom' id='nom' value = $nom></td>
                </tr>
                <tr>
                    <td class='column'>Sexe</td>
                    <td class='column'>
                        <select name='sexe' value = $sexe>
                            <option value='M'>Masculin</option>
                            <option value='F'>Féminin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='column'>Date de Naissance</td>
                    <td class='column'><input type='date' name='naissance' value = $naissance></td>
                </tr>
                <tr>
                    <td class='column'>Addresse</td>
                    <td class='column'><input type='text' name='addresse' value = $addresse></td>
                </tr>
                <tr>
                    <td class='column'>Services</td>
                    <td class='column'><select name='service'>
                            <option value='vente'>Vente</option>
                            <option value='approvisionnement'>Approvisionnement</option>
                            <option value='réclamation'>Réclamation</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><input class='button' type='submit' value='modifier' name='submit'></td>
                </tr>  
            </table>
        </form>"
    ?>
        
</body>
</html>