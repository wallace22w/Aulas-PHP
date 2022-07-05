<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="style.css">

    <style>
    .$sit {
        color = withe;
    }
    </style>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["nome"])? $_GET["nome"]: "Não informado";
            $prova01 = isset($_GET["p1"])? $_GET["p1"]: "Não informado";
            $prova02 = isset($_GET["p2"])? $_GET["p2"]: "Não informado";
            echo "As notas das provas P1 $prova01 e P2 $prova02.";
            $m = ($prova01 + $prova02) / 2;
            echo " A Média entre as Provas é $m <br>";

            if ($m <5) {
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
                echo "$n, com base nas notas tiradas na prova, sua situação é $sit.";
            ?>
           
    </div>
</body>
</html>