<?php
 $bool = true;
 $int = 27;
 $ibra = "OM";
 $float = 0.27;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </thead>
        <tbody>
            <tr>
                <td>booléen</td>
                <td>$bool</td>
                <td><?php echo $bool?></td>
                
            </tr>
            <tr>
                <td>entier</td>
                <td>$int</td>
                <td><?php echo $int?></td>
                
            </tr>
            <tr>
                <td>chaîne de caractères</td>
                <td>$ibra </td>
                <td><?php echo $ibra?></td>
                
            </tr>
            <tr>
                <td>nombre à virgule flottante</td>
                <td>$float</td>
                <td><?php echo $float?></td>
                
            </tr>
        </tbody>
    </table>
</body>
</html>