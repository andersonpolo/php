<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Teste livre</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilo01.css">
    </head>
    <body>
        <?php
        $d = $_GET['a'];
        $c = $_GET['b'];
        $tot = ($d + $c) / 2.;
        echo $tot;
        ?>
    </body>
</html>
