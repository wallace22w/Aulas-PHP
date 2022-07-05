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
          $a = isset ($_GET["ano"])?$_GET["ano"]: 2000; 
          $i = date ("Y") - $a;
          echo "Você nasceu em $a e tera $i anos.<br>";
          if ($i >= 18) {
            $d = "Já pode Dirigir";
            $v = "Já pode Votar";
          }
          else {
            $d = "Não pode Dirigir";
            $v = "Não pode Votar"; 
          }
          echo " Com $i anos você $d e também $v.";
        ?>
    </div>

    <a href="exercicio01.html">Voltar</a>
</body>
</html>