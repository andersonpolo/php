 <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>fatorial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $po = 3;
            $pol= $po -1;         
            for ($num = $po; $num > 0; $num--){
                $po= $pol * $num;
            }
            echo $po;
            ?>            
        </div>
    </body>
</html>
