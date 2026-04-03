<?php
    
    $json_str = '{"produtos": '. 
    '[{"nome":"RTX 3060", "preco":200, "quantidade": 20},'.
    '{"nome":"Ryzen 7 5700X3d", "preco":1200, "quantidade": 15},'.
    '{"nome":"16 gb memória Ram DDR4", "preco":20000, "quantidade": 100}'.
    ']}';

    file_put_contents("produtos.json", $json_str);

    $dados = json_decode($json_str);
    $produtos = $dados->produtos;


    foreach ( $produtos as $e ){
        echo "nome: $e->nome - preco: $e->preco - quantidade: $e->quantidade<br/>";
    }
?>