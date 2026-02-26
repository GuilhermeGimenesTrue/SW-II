<?php 
    for ($i=1; $i<=5; $i++) {
        echo $i;
        echo "<br>";
    }

    echo "<br>";
    echo "<hr>";

    $nomes = ['FULANO', 'CICLANO', 'BELTRANO', 'GUILHERME', 'ELAINE', 'PAULA', 'NICOLASH', 'MANUELA'];
 /* echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2];
    echo "<br>";
    echo "<hr>"; */

    $quant = count($nomes);

    for ($i=0; $i<$quant; $i++) {
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<br>";
    echo "<hr>";

    foreach ($nomes as $indice => $value) {
        echo $indice . " ====> " . $value . "<br>";
    }

    asort($nomes);

?>