<?php
//Função com parametro e sem retorno

    function quadrado($a){
        $x= $a * $a;

        echo "$x <br>";
    }

    quadrado(4);
    quadrado(3);
    quadrado(7);
    quadrado(9);

    echo "<hr>";

    function soma($x,$y){
        $soma = $x + $y;
        echo "A soma é $soma <br>";
    }


    $n1= 5;
    $n2= 8;

    soma($n1,$n2);
?>