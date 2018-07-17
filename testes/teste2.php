<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>teste 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <?php
        $a= 2;
        $b= 2;
        $c= 1;
        $d= 3.5;  
        $somar= $a+$c;
        $multi= $b*$d;
        if ($somar == $multi) {
            echo "A+C é igual que BxD";
        } elseif ($somar > $multi) {
            echo "A+C é maior que BxD";
        } else {
            echo "A+C é menor que BxD";
        }
        ?>
    </div>
</body>
</html>
