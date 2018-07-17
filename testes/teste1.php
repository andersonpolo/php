<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>teste 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <?php
        $num = $_GET['num'];
        if ($num == 0) {
            echo "O número é igual a zero";
        } elseif ($num > 0) {
            echo "O número é maior que zero!";
        } else {
            echo "O número é menor que zero!";
        }
        ?>
    </div>
</body>
</html>
