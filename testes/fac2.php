<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>factorial</title>
        <meta charset="utf-8">
    </head>	
    <body>
        <?php
        $fac1 = 1;
        for ($p = 7; $p >= 1; $p--) {
            $fac1 = $p * $fac1;
        }
        echo "<h1><p>$fac1</p></h1>";
        ?>
    </body>
</html>
