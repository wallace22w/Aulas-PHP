<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Colocar W</h2>
    <div>
        <pre>
            <?php
                $v = array ("A", "J", "M", "X", "K",);
                print_r ($v);
                array_unshift ($v, "W");
                print_r ($v);
            ?>
        </pre>

        <h2>Tirar o primeiro </h2>

        <pre>
            <?php
                $z = array ("A", "J", "M", "X", "k",);
                print_r ($z);
                array_shift ($z,);
                print_r ($z);
            ?>
        </pre>



    </div>
</body>
</html>