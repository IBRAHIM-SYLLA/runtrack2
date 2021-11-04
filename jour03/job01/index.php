<?php
$array2 = [200, 204, 173, 98, 171, 404, 459];
// Declaration du tableau
var_dump($array2);
// afficher valeur d'ub tableau = faire une boucle 
for($i = 0; isset($array2[$i]); $i++){
    if($array2[$i] % 2 == 0)
    {
        echo $array2[$i]. ' pair <br/>';
    }
    else
    {
        echo $array2[$i]. ' impaire <br/>';
    }
}
?>