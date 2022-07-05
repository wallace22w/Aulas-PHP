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
                $v = array ( "nome" => "Wallace", 
                             "idade" => 22,
                             "peso" => 71.5);
                foreach ($v as $k => $c) {
                    echo "O campo $k possui o conteúdo $c <br>";
                };
            ?>
            
        </pre>
     </div>
       
</body>
</html>