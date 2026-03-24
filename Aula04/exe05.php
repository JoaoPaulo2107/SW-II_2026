<?php
    //trabalhando com arrays

    function mostra_array($vetor){
        foreach ($vetor as $valor){
            echo $valor . "<br>";
        }
    }

    function mostra_um($vetor2,$posicao){
        echo $vetor2[$posicao];
    }

    $numeros = [1,2,3,4,5];
    $nomes = ['fulano','beltrano','ciclano'];

    mostra_array($numeros);
    mostra_array($nomes);
    echo "<br>";

    mostra_um($nomes,1);

?>