<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Contagem Progressiva</h2>
        <?php
          $c = 1;
          do {
                echo "$c ";
                $c ++;
          }while ($c <=30);
        ?>

        <h2>Contagem regressiva</h2>

        <?php
            $c= 30;
            do {
                echo "$c ";
                $c --;
            }while ($c >=1);
        ?>

        <h2>Pulando de 5 em 5</h2>

        <?php
           $c = 0;
           do {
            echo "$c ";
            $c += 5;
           }while ($c <=220);
        ?>
    </div>
</body>
</html>