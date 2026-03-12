<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <title>Processo</title>
</head>
<body>
    <?php 
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $idade = $_POST['Idade'];
        $ano = date("Y") - $idade;


    ?>
    
    <p>O nome é : <?php echo $nome ?></p>
    <p>O email é: <?php echo $email ?></p>
    <p>A Idade é: <?php echo $idade ?></p>
    <p>O seu ano de nascimento é: <?php echo $ano;?> </p>
    <?php
        if ($idade >= 18){
            echo "<p style='color: blue'> Você é maior de idade </p>";
        } else{
            echo "<p style='color: red'> Você é menor de idade </p>";
        };

        echo " <p> Lista de Clientes </p>";

        echo "<ul>";

            for ($i=1; $i <= $idade; $i++) { 
                echo"<li>Cliente $i</li>";
            };

        echo"</ul>";


    ?>



</body>
</html>

