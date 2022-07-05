<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>pernonalizadas</h2>
    <div>
        <pre>
            <?php
                $v = array (3 =>5,
                            1 =>9,
                            0 =>8,
                            7 =>7);
                unset ($v [0]);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>