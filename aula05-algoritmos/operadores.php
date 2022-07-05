<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "Os valores recebidos são $n1 e $n2<br>";
            echo "A Média vale " . ($n1 + $n2) / 2;
            echo "<br>A Soma vale " . ($n1 + $n2);
            echo "<br>A Subtração vale " . ($n1 - $n2);
            echo "<br>A Multiplicação vale " . ($n1 * $n2);
            echo "<br>A Divisão vale " . ($n1 / $n2);
            echo "<br>O modulo vale " . ($n1 % $n2);
            echo "<br> O valor Absoluto de $n2 é " . abs ($n2);
            echo "<br>A Raiz quadrada de $n1 é " . sqrt ($n1);
            
        ?>
    </div>
</body>
</html>