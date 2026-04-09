<?php 
    $conteudo = file_get_contents("produtos.json");
    $produtos = json_decode($conteudo, true);

    
    $key = array_search("Grande Espada de Artorias", array_column($produtos, "nome"));
    if ($key === true){
        unset($produtos[$key]);
        
    }

    $json = json_encode($produtos);
    file_put_contents("produtos.json", $json);
?>