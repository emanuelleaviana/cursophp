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
    <header>
        <h1>Informe um número</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="num">número: </label>
            <input type="number" name="num" id="idnum">

            <input type="submit" value="Calcular">
        </form>
    </section>

</body>

</html>