<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Soma ou Multiplicação</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div>
        <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        if ($a > $b) {
            echo "$b $a";
        } elseif ($a < $b) {
            echo "$a $b";
        }
        ?>
    </div>
</body>
</html>
