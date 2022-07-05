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
            $t = "Aqui temos um texto gigante criado para testar a função Wordwrap";
            $r = wordwrap ($t, 5, "<br>\n", false);
            echo $r;
        ?>
    </div>
</body>
</html>