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
            $tab = isset ($_GET["num"]) ? $_GET["num"] : 1;
            for($c =1; $c<=10; $c++) {
                $r = $tab * $c;
                echo "$tab X $c = $r <br>";
            }
                   

        ?>
        <a href="exercicio02.php">Voltar</a>
    </div>
</body>
</html>