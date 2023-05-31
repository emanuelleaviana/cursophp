<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $num = $_GET["num"];

        echo "O número escolhido foi <strong>$num</strong> <br>";
        echo "O seu antecessor é " . $num -1 . "<br>" ;
        echo "O seu sucessor é " . $num + 1 . "<br>";
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>

</html>