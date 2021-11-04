<?php
/*Créez une string nommée str et affectez y le texte “Tous ces instants seront
perdus dans le temps comme les larmes sous la pluie.” Parcourir cette
chaîne en affichant seulement un caractère sur deux.*/

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$i = 0;
for($i = 0; isset($str[$i]); $i++){
    if($i % 2 == 0){
        echo $str[$i];
    }
}
?>