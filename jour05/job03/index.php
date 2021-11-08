<?php

/*Créez une fonction nommée “gethello”. Cette fonction doit retourner “Hello
LaPlateforme!”. Appelez cette fonction dans votre page en récupérant sa
valeur de retour et affichez la.*/
$var = "Hello LaPlateforme!";

function gethello($var){
    if($var > 0)
    return($var);
}
echo ($var);
gethello($var);
?>