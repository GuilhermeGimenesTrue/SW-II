<?php 
    $conteudo = file_get_contents("produtos.json");
    $produtos = json_decode($conteudo, true);
    array_push($produtos, [
        "nome" => "Escudo de Havel",
        "preço" => 150.00,
        "quantidade" => 1
    ]);
    $json = json_encode(["produtos" => $produtos]);
    file_put_contents("produtos.json", $json);


?>