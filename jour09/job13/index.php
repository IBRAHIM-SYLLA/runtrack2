<?php
    $bdd = mysqli_connect('localhost','root','','jour08');

mysqli_set_charset($bdd, 'utf8');

$requete = mysqli_query($bdd,'SELECT salles.nom as salle, etage.nom as etage FROM etage INNER JOIN salles on etage.id = salles.id_etage');
$salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);
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
            <tr>
                <th>nom_salles</th>
                <th>nom_etage</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($salles as $salle){
                    echo'<td>'.$salle['salle'].'</td>';
                    echo'<td>'.$salle['etage'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>