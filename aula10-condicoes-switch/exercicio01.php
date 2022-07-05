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
            $n = isset ($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset ($_GET["oper"]) ? $_GET["oper"] : 1;
            switch ($o) {
                case 1 :;
                    $r = $n * 2;
                    break;

                case 2 :;
                    $r = $n ^ 3;
                    break;

                case 3 :;
                    $r = sqrt($n);
            }
            echo "O valor da Operação solicitada foi " . number_format($r, 2);
            
        ?>  
    </div>
            <a href="exercicio01.html">Voltar</a>
</body>
</html>