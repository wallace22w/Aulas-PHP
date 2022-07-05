<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <p>Retorno do número</p>
        <?php
            function soma ($a, $b) {
                return $a + $b;
            } 

            $x = 88;
            $y = 12;
            $r = soma ($x, $y);
            echo "A soma entre $x e $y é igual $r.";
        ?>
    </div>

    
   
</body>
</html>