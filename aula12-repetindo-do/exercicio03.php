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
           $v = isset ($_GET["val"]) ? $_GET["val"] : 1;
           echo "<h2>Calculando o fatorial de $v</h2>";
           $c = $v;
           $fat = 1;
           do {
            $fat = $fat * $c;
            $c --;
           }while ($c >=1);

           echo "<h2>$v ! = $fat</h2>";

           

        ?>
        <a href="exercicio003.php">Voltar</a>
    </div>
</body>
</html>