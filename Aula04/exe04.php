<?php
//Função com parametro e com retorno

    function soma($x,$y){
        $soma= $x + $y;
        return $soma;

    }

    $num1 = 8;
    $num2 = 6;

    echo soma($num1,$num2);
    echo"<hr>";

    function resto($a){
        $resto= $a % 2 ;
        return $resto;
    }

    $n1=8;

    $resultado = resto($n1);
    if ($resultado = 0) {
        echo "par";
    } else {
        echo "impar";
    }
    
    
?>