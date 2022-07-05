<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Soma Com multiplos Parametros</p>
        <?php
          function soma () {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0; $i<$t; $i++) {
              $s += $p [$i];
            }
            return $s;
          }

          $r = soma (10, 33, 10, 11, 88);
          echo "A soma entre os valores é igual a $r.";
        ?>
    </div>
</body>
</html>