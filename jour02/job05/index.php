<?php 
$div=1;
for ($i = 1; $i <= 1000; $i++){
    $compteurdiv = 0;
    for ($div=1; $div<= $i; $div++){
        if ($i%$div == 0){
            $compteurdiv++;
        }

    }
    if ($compteurdiv == 2){
        echo $i.'<br>';
    }
}
?>