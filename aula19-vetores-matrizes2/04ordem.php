<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array ("A", "J", "M", "X", "K");
                print_r ($v);
                krsort ($v);
                print_r ($v);
            ?>
        </pre>
    </div>
</body>
</html>