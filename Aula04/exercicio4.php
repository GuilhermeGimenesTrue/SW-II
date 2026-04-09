<?php 
    $conteudo = file_get_contents("usuarios.json");
    $usuarios = json_decode($conteudo, true)["usuarios"];

    $email = "balthazar@gmail.com";
    foreach($usuarios as $usuario) {
        if ($usuario["email"] == $email){
            echo "Nome: " . $usuario["nome"] . "<br>";
            echo "Email: " . $usuario["email"] . "<br><br>";
        }
    } if ($usuario["email"] != $email){
        echo "Email não encontrado.";
    }



?>