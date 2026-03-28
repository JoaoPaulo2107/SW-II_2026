<?php

    function tabuada($num){
        for ($i=1; $i <= 10 ; $i++) { 
            echo "$num X $i = ".  $num * $i ."<br>";
        }
    }

    tabuada(5);

?>