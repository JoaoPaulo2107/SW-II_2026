<?php
    $textoparagrafo = $_POST['textoParagrafo'];
    $conteudolista = $_POST['conteudoLista'];
    $qtdParagrafos = $_POST['qtdParagrafo'];
    $qtditensListas = $_POST['qtditenslistas'];

    if ($qtdParagrafos < 1 or $qtdParagrafos > 20 or $qtditensListas < 1 or $qtditensListas > 50) {
       echo "<p>A quantidade de paragrafos e/ou listas é inválida</p> <br>";
       exit;
    }

    if ($qtdParagrafos > 10) {
        echo "Muitos parágrafos gerados! <br> <br>" ;
    }

    if ($qtditensListas > 30) {
        echo "<p> Lista extensa! </p>";
    }


    for ($i=1; $i <= $qtdParagrafos ; $i++) { 
        echo " Parágrafo $i:$textoparagrafo <br>";
    }
 
    echo "<ul>";
    for ($i=1; $i <= $qtditensListas ; $i++) { 
        echo "<li> Item $i : $conteudolista </li>";
    }
    echo "</ul>";


?>