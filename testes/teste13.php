<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>2º exer_lt3</title>
        <meta charset="utf-8">
    </head>	
    <body>
        <?php
        $lista = array();
        $i = 1;
        for ($i; $i <= 20; $i++) {
            $lista[$i] = rand(100, 200);
        }
        print_r($lista);
        echo '<br><br>';
        var_dump($lista);
        ?>
    </body>
</html>
