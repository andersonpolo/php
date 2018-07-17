<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>teste 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <?php
        $a = 8;
        $b = 9;
        $c = 7;
        $d = 5;
        $media = ($a+$b+$c+$d)/4;
        if ($media >= 7) {
            echo "O Aluno está aprovado!";
        } elseif ($media < 7) {
            echo "O Aluno está reprovado!";
        }
        ?>
    </div>
</body>
</html>
