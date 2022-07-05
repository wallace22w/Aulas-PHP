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
            $d = isset ($_GET["ds"]) ? $_GET["ds"] : 0;
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estuda! ";
                    break;

                case 7:
                case 8:
                    echo "Descanse pequeno Gafanhoto!";
                    break;

                default :
                    echo "Dia da semana invalido";
            }
            
            
       ?>

        <a href="exercicio02.html">Voltar</a>
    </div>

</body>
</html>