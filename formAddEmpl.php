<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employes</title>
</head>
<body>
<form action="valAddEmpl.php" id="form" method="POST">
        <table class="container" align="center" border="black">
            <tr>
                <td width = "200px">Prénom</td>
                <td width = "200px"><input type="text" name="prenom" id="prenom"></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" id="nom"></td>
            </tr>
            <tr>
                <td>Sexe</td>
                <td>
                    <select name="sexe">
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date de Naissance</td>
                <td><input type="date" name="naissance"></td>
            </tr>
            <tr>
                <td>Addresse</td>
                <td><input type="text" name="addresse"></td>
            </tr>
            <tr>
                <td>Services</td>
                <td><select name="service">
                        <option value="vente">Vente</option>
                        <option value="approvisionnement">Approvisionnement</option>
                        <option value="réclamation">Réclamation</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Ajouter" name="submit"></td>
            </tr>  
        </table>
    </form>
    <?php
        
    ?>
</body>
</html>