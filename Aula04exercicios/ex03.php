 <?php
 
    function sobra($a){
        $resto= $a % 2;
        return $resto;
    }

    $n1=8;

    $resultado = sobra($n1);
    if ($resultado = 0) {
        echo "par";
    } else {
        echo "impar";
    }
    
    echo $resultado
    
?>