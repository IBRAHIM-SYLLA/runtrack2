<?php
// Créez une string nommée str et affectez y “I'm sorry Dave I'm afraid I can't
// do that”. Créez un algorithme qui parcourt cette chaîne et affiche
// uniquement les voyelles.

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "AEIOUYaeiouy";
$i = 0;
$j = 0;
while (isset($str[$i]) ){
    $j = 0;
    while(isset($voyelles[$j])){
        if($str[$i] == $voyelles[$j])
            echo $str[$i];
        $j++;
    }
    $i++;
}
?>