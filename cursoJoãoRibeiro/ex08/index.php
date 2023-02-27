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
    $nome = "emanuelle";
    $apelido = "viãna";
    $maiusculaNome = strtoupper($nome . $apelido);
    
?>
    <p><?= "$nome  $apelido" ?></p>
    <p><?= "O meu nome é " . mb_strtoupper($nome) . " e meu apelido é " . mb_strtoupper($apelido) . "."?></p>

</body>
</html>
