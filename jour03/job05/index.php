<?php
$dic = [
    "voyelles" => "aeiouyAEIOUY",
    "consonne" => "bcdfghjklmnpqrstvwxz",
];
$str = 'On n est pas le meilleur quand
on le croit mais quand on le sait.';
$compteur = 0;
$compteur2 = 0;
for ($i = 0; isset($str[$i]); $i++){
    for($j = 0; isset($dic["voyelles"][$j]); $j++){
        if ($str[$i] == $dic["voyelles"][$j]){
            $compteur++;
        }
    }
    for($j = 0; isset($dic["consonne"][$j]); $j++){
        if ($str[$i] == $dic["consonne"][$j]){
            $compteur2++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job05</title>
</head>
<body>
    <main>
        <table>
                <thead>
                    <th>Voyelles</th>
                    <th>consonne</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $compteur?></td>
                        <td><?php echo $compteur2?></td>
                    </tr>
                </tbody> 
        </table>
    </main>  
</body>
</html>
