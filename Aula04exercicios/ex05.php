<?php
function somaArray($numeros){
    $soma = 0;

    foreach ($numeros as $num) {
        $soma =$soma + $num;
    }

    return $soma;
}

$valores = [1, 2, 3, 4, 5,6];

echo somaArray($valores);

?>