<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual ou Identico</title>
</head>
<body>
    <div>
        <?php
            $a = 88;
            $b = "88";
            $r = ($a == $b) ? "SIM" : "NÃO";
            echo "As variaveis A e B são iguais? $r";

 
        ?>
    </div>
        <br>
    <div>
        <?php
            $a = 10;
            $b = "10";
            $r = ($a === $b) ? "SIM" : "NÃO";
            echo "As variaveis A e B são identicas? $r";
        ?>
    </div>


</body>
</html>