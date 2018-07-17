<!doctype html>
<html lang="pt-br">
    <head>
        <title>Contando letras</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $letra = $_GET['letra'];
        $dito = $_GET['dito'];
        $tam = strlen($dito);
        $i = 0;
        for ($i; $i <= $tam; $i++) {
            $pos = substr($dito, $i, 1);
            if ($pos === $letra) {
                $cont = $cont + 1;
            }
        }
        echo 'Na palavra '.$dito.' temos a letra '.$letra.' '.$cont.' vezes.';
        ?>
    </body>
</html>
