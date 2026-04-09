<?php 
    $produtos = [
        "nome" => "Grande Espada de Artorias",
        "preço" => 250.00,
        "quantidade" => 1
    ];

    $json = json_encode($produtos);
    file_put_contents("produtos.json", $json);
?>