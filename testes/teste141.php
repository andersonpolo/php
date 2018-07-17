<!doctype html>
<html lang="pt-br"/>
<head>
    <title>requisição $_GET</title>
    <meta charset="utf-8"/>
</head>	
<body>
    <?php
    $lista = array();
    $i = 1;
    $index = ($_GET['item']);
    for ($i; $i <= $index; $i++) {
        //$lista[$i]= pow(2,$i);
        //echo 'O item' . $lista[$i] . ' tem seu md5 = ' . md5($lista[$i]) . '<br>';
        $lista['item' . $i] = md5('item' . $i);
    }
    foreach ($lista as $index => $value) {
        echo 'O elemento de index ' . $index . ' tem seu MD5 = ' . $value . '. <br><br>';
    }
    ?>
</body>
</html>
