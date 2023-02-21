<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form.css">
    <title>Ajouter un employes</title>
</head>
<body>
<form action="valAddEmpl.php" id="form" method="POST">
        <table class="container" align="center" >
            <tr>
                <td class="column" width = "200px">Prénom</td>
                <td class="column" width = "200px"><input type="text" name="prenom" id="prenom"></td>
            </tr>
            <tr>
                <td class="column">Nom</td>
                <td class="column"><input type="text" name="nom" id="nom"></td>
            </tr>
            <tr>
                <td class="column">Sexe</td>
                <td class="column">
                    <select name="sexe">
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="column">Date de Naissance</td>
                <td class="column"><input type="date" name="naissance"></td>
            </tr>
            <tr>
                <td class="column">Addresse</td>
                <td class="column"><input type="text" name="addresse"></td>
            </tr>
            <tr>
                <td class="column">Services</td>
                <td class="column"><select name="service">
                        <option value="vente">Vente</option>
                        <option value="approvisionnement">Approvisionnement</option>
                        <option value="réclamation">Réclamation</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class="button" type="submit" value="Ajouter" name="submit"></td>
            </tr>  
        </table>
    </form>
    <?php
       session_start();
       if(!(isset($_SESSION['login']))){
           header('Location: http://localhost/serie/index.html');
       } 
    ?>
</body>
</html>