<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovado ou reprovado</title>
</head>
<body>
    <div>
        <h2>Exemplo 1</h2>
            <?php
                $nota1 = $_GET["n1"];
                $nota2 = $_GET["n2"];
                $m = ($nota1 + $nota2) / 2;
                echo "A média entre $nota1 e $nota2 é igual a $m <br>";
                echo "Sendo assim, a situação do Aluno é " . (($m < 6) ? "REPROVADO" : "APROVADO");

            ?>
    </div>
</body>
</html>