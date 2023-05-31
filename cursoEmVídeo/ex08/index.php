<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
    <h1>Trabalhando com número aleatórios</h1>
        <?php 

        $min = 0;
        $max = 100;

        $sort = mt_rand($min, $max);
        echo "Gerando um número aleatório entre 0 e 100... <br>";
        echo "O valor gerado foi <strong> $sort </strong>";
        ?>
         <p><button onclick="javascript:document.location.reload()">Gerar outro</button></p>

        
    </section>

</body>

</html>