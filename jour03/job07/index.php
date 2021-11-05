<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newstr = "";
var_dump($str);

for ($i = 0; isset($str[$i]); $i++){
    if($i <= 58){
        $newstr = $newstr.$str[$i + 1];
        
    }
    if($i == 58){
        $newstr = $newstr.$str[0];
    }
}
echo $newstr;
?>