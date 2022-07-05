<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
<h1>Adição</h1>
<h2>Forma normal</h2>
    <?php   
        $preco = $_GET["p"];
        echo "O preço do produto é $preco";
        $preco = $preco + ($preco*10/100);
        echo "<br>O novo preço do produto com 10% de aumento sera de $preco";
    ?>

<h2>Com operadores de atribuição (+=)</h2>
    <?php   
        $preco = $_GET["p"];
        echo "O preço do produto é de " . number_format($preco, 2);
        $preco += ($preco*10/100);
        echo "<br>O novo preço do produto com 10% de aumento sera de " . number_format($preco, 2);
    ?>

<h1>Subtração normal</h1>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é de $preco";
        $preco = $preco - ($preco*10/100);
        echo "<br>O novo preço do produto com 10% de desconto sera de " . number_format($preco, 2);
    ?> 

    <h2>Com operadores de atribuição (-=)</h2>

    <?php
        $preco = $_GET["p"];
        echo "O preço do produto sera de " . number_format($preco, 2);
        $preco -= ($preco*10/100);
        echo "<br>O novo preço do produto com 10% de desconto sera de " . number_format($preco, 2);
    ?>



</body>
</html>