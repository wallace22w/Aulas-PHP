<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleições</title>
</head>
<body>
    <div>
        <?php
           $ano  = $_GET["an"];
           $idade = 2022 - $ano;
           echo "Quem nasceu em $ano tem $idade anos.";
           $sit = ($idade >=18 && $idade <65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
           echo " E dessa forma seu voto é $sit";  
        ?>
    </div>
</body>
</html>