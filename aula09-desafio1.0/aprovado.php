<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do Aluno</title>
</head>
<body>
    <div>
        <?php
            $nota1 = isset ($_GET["n1"]) ? $_GET["n1"] : "[Não informado]";
            $nota2 = isset ($_GET["n2"]) ? $_GET["n1"] : "[Não informado]";
            $m = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é igual a $m<br>";
            
            if ($m <5){
                $sit = "REPROVADO";
            }
            else {
            if ($m >=5 && $m<7) {
                $sit = "RECUPERAÇÃO";
            }
            
            else {
                $sit = "APROVADO";
            }
            }
            echo "A situação do aluno: $sit";
            

        ?>
    </div>
    <a href="aluno.html">Voltar</a>
</body>
</html>