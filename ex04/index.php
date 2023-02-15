<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testes de Tipos primitivos</h1>
    <?php 
    //0x = hexadecimal  -  0b = binário  -  0 = octal
        // $num = 300;
        // echo "O valor da variavel é $num";

        // $v = 300;
        // var_dump($v);

        // $num = (int)3e4; // 3 x 10^4 
        // echo "O valor é $num ";
        // var_dump($num) 
        // forcei a tipagem inteira do resultado com o (int) = coerção

        // $num = (int)'950';
        // var_dump($num);

        // $casado = true;
        // var_dump($casado); // true = 1 e false = vazio

        // $vet = [1, 4.5, 'Manu', true];
        // var_dump($vet);
    
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>
    
</body>
</html>