<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e HTML 2 idade</title>
</head>
<body>
    <div>
        <?php
            $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
            $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
            $idade = date ("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos";

        ?>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>