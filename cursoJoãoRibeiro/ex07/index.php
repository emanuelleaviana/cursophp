<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
<?php 
    $nome = "Emanuelle";
    $apelido = "Viana";
    $qtd = mb_strlen($nome . $apelido); // o mb_ permite não realizar a contagem dupla de caracteres acentuados
?>
    <p><?= "$nome  $apelido" ?></p>
    <p><?= "O meu nome tem $qtd caracteres"?></p>

</body>
</html>
