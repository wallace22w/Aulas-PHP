<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
            $a = isset($_GET["ano"]) ? $_GET["ano"] : 1999;
            $i = date("Y") - $a;
            echo "$n, Você nasceu em $a e tera $i anos.<br>";
            if ($i < 16 ) {
                $tipodevoto = "Não Vota";
            }

            elseif (($i >= 16 && $i < 18) || ($i>65)) {
                $tipodevoto = "Voto Opcional";
            }

            else {
                $tipodevoto = "Voto Obrigatorio";
            }

            echo "Para essa idade, $tipodevoto.<br>";

        ?>
        <a href="exercico03.html">Voltar</a>
    </div>
</body>
</html>