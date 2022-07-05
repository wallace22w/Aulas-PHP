<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> 
        <form action="02-tabuada.php" method="get">
            <select name="num" id="">       
                    <!--<option value="">1</option>Ao inves de usar todas essas options, usar a formula como abaixo.
                    <option value="">2</option>
                    <option value="">3</option>-->

                    <?php
                        for ($c =1; $c <=10; $c ++) {
                            echo "<option>$c</option> ";
                        }
                    ?>
            </select>  
            <input type="submit" value="Tabuada">         
        </form> 
    </div>
</body>
</html>