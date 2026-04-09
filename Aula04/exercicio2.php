<?php 
    $conteudo = file_get_contents("usuarios.json");
    $usuarios = json_decode($conteudo, true)["usuarios"];

    foreach($usuarios as $usuario) {
        echo "Nome: " . $usuario["nome"] . "<br>";
        echo "Email: " . $usuario["email"] . "<br><br>";
    }
?>