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
           $a = isset($_GET["ano"]) ? $_GET["ano"] : 1999;
           $i = date("Y") - $a;
           echo "Você nasceu em $a e tera $i anos.<br>";
            
           if ($i <16) {
            $tipodevoto= "Não vota";
           }
           else {
            if ($i >=16 && $i<18) {
                $tipodevoto= "Voto opcional";
            }
            else {
                $tipodevoto = "Voto Obrigatório";
            }
           }
           echo "Para esssa idade, $tipodevoto.";
        ?>
    </div>
</body>
</html>