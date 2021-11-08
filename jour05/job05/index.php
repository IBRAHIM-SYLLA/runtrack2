<?php
function occurrences($str, $char){
    $str2 = 0;
    $compteur = 0;
        while(isset($str[$str2]) == true){
            if( $str[$str2] == $char) 
            $compteur++;
            $str2++;
        }
    return $compteur;
}
$res = occurrences('bonjour', 'o');
echo $res;
?>