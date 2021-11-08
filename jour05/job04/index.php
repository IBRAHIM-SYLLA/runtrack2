<?php
function calcule($a, $operation, $b){
    $reste = 0;
    if ($operation == "+"){
        echo $a + $b;
    }
    else if ($operation == "-"){
        echo $a - $b;
    }
    else if ($operation == "*"){
        echo $a * $b;
    }
    else if ($operation == "/"){
        echo $a / $b;
    }
    else if ($operation == "%"){
        $reste = $a % $b;
        echo $reste;
    }
}
calcule(2, "%", 5);
?>