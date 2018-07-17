<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>teste 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <?php
        $sal =$_GET['salario'];
        if ($sal <= 300) {
            $reaj= ($sal +($sal * 0.07));
            echo "O seu salário foi para $reaj reais!";
        } elseif ($sal > 300) {
            $reaj= ($sal +($sal * 0.05));
            echo "O seu salário foi para $reaj reais!";
        }
        ?>
    </div>
</body>
</html>
