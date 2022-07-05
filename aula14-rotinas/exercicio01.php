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
           function soma ($a, $b) {
                $s = $a + $b;
                echo "<p>A soma vale $s</p>";
           }

           soma (10, 20);
           soma (88, 10);
           $x = 10;
           $y = 11;
           soma ($x, $y);
        ?>
    </div>
</body>
</html>