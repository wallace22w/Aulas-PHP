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
            <table border="1"><tr>
                <?php
                    $c = range(5, 20, 2);
                    foreach ($c as $v) {
                        echo "<td>$v ";
                    }

                ?>
            
            </table>
        </pre>
    </div>
</body>
</html>