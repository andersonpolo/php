<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>while</title>
        <meta charset="utf-8">
    </head>	
    <body>
        <?php
        $a = 5;
        $b = 17;
        $i = $a;
        while ($i < $b-1) {
            $i = $i + 1;
            echo $i . ' ';
        }
        ?>
    </body>
</html>
