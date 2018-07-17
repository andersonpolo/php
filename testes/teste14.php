<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>requisição $_GET</title>
        <meta charset="utf-8">
    </head>	
    <body>
        <?php
        $lista = array();
        $i = 1;
        $index = $_GET['item'];
        for ($i; $i <= $index; $i++) {
            $lista[$i] = rand(100, 200);
            echo  'Item '.$i.' : <input type="text" name="item"><br>';
        }
        echo '<input type="submit" name="submit" value="Enviar!" />';
        
        ?>
    </body>
</html>
