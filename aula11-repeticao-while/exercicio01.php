<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <div>
        <h2>Com Soma +</h2>
        <?php
           $c = 0;
           while ($c <= 10) {
                echo $c . "<br>";
                $c ++;
           }
        ?>

        <h2>Com Subtração</h2>

        <?php
           $c = 15;
           while ($c >=0 ) {
            echo $c ;
            $c --;
           }
        ?>

        <h2>Pulando de 2 em 2</h2>

        <?php
            $c = 0;
            while ($c <= 30) {
                echo $c;
                $c += 2;
            }
        ?>

    </div>
</body>
</html>