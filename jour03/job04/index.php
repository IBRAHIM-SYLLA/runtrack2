<?php
function mystrlen($str){
    $len = 0;
    while( isset($str[$len])){
        $len++;
    }
    return $len;
}
$str = "Dans l'espace, personne ne vous entend crier";
echo 'il y a '.mystrlen($str).' caractères';
?>