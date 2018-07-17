<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>1º exer_lt3</title>
        <meta charset="utf-8">
    </head>	
    <body>
        <?php
        $lista = array();
        $i = 1;
        for ($i; $i <= 10; $i++) {
            $lista[$i] = $i * 2;
        }
        print_r($lista);
        echo '<br>';
        var_dump($lista);
        ?>
    </body>
</html>
