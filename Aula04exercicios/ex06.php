<?php

    function gera_numero(){
        return rand(1,100);
    }

    $numeros = [];

    for ($i = 0; $i < 10; $i++) {
        $numeros[] = gera_numero();
        echo $numeros[$i] . "<br>";
    }

?>