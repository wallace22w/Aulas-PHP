<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            echo "O valor recebido foi $valor<br>";
            $r = sqrt ($valor);
            echo " A Raíz quadra de $valor é " . number_format($r, 2);           
        ?>

        <a href="01exercicio.html">Voltar</a>
    </div>
</body>
</html>