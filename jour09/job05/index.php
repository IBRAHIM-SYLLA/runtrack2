<?php
    $bdd = mysqli_connect('localhost','root','','jour08');

mysqli_set_charset($bdd, 'utf8');

$requete = mysqli_query($bdd,"SELECT * FROM `etudiants` WHERE DATEDIFF(CURRENT_DATE,naissance) >=365*18");

$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

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
                <th>id</th>
                <th>prenom</th>
                <th>nom</th>
                <th>naissance</th>
                <th>sexe</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($etudiants as $etudiant){
                    echo'<tr><td>'.$etudiant['id'].'</td>';
                    echo'<td>'.$etudiant['prenom'].'</td>';
                    echo'<td>'.$etudiant['nom'].'</td>';
                    echo'<td>'.$etudiant['naissance'].'</td>';
                    echo'<td>'.$etudiant['sexe'].'</td>';
                    echo'<td>'.$etudiant['email'].'</td></tr>';
                }
            ?>
        </tbody>
    </table>
</body>
</html>