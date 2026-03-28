<?php

function fatorial($n){
    $resultado = 1;

    for ($i = $n; $i > 1; $i--) {
        $resultado =$resultado * $i;
    }

    return $resultado;
}

echo fatorial(5);

?>