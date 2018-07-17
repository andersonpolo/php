<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>switch</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
            $dia = 15;
            $mes = 4;
            switch ($mes) {
                case 1:
                    if (($dia >= 1) && ($dia <= 19)) {
                        echo "Você é de Capricórnio!";
                    } elseif (($dia >= 20)and ( $dia <= 31)) {
                        echo "Você é de Aquario!";
                    }
                    break;
                case 2:
                    if (($dia >= 1) && ($dia <= 18)) {
                        echo "Você é de Aquario!";
                    } elseif ($dia >= 19 and $dia <= 29) {
                        echo "Você é de Peixes!";
                    }
                    break;
                case 3:
                    if ($dia >= 1 and $dia <= 20) {
                        echo "Você é de Peixes!";
                    } elseif ($dia >= 21 and $dia <= 31) {
                        echo "Você é de Aires!";
                    }
                    break;
                case 4:
                    if ($dia >= 1 and $dia <= 20) {
                        echo "Você é de Aires!";
                    } elseif ($dia >= 21 and $dia <= 30) {
                        echo "Você é de Touro!";
                    }
                    break;
                case 5:
                    if ($dia >= 1 and $dia <= 21) {
                        echo "Você é de Touro!";
                    } elseif ($dia >= 22 and $dia <= 31) {
                        echo "Você é de Gemêos!";
                    } 
                    break;
                case 6:
                    if ($dia >= 1 and $dia <= 21) {
                        echo "Você é de Gemêos!";
                    } elseif ($dia >= 22 and $dia <= 31) {
                        echo "Você é de Câncer!";
                    } 
                    break;
                case 7:
                    if ($dia >= 1 and $dia <= 23) {
                        echo "Você é de Câncer!";
                    } elseif ($dia >= 24 and $dia <= 31) {
                        echo "Você é de Leão!";
                    }    
                    break;
                case 8:
                    if ($dia >= 1 and $dia <= 23) {
                        echo "Você é de Leão!";
                    } elseif ($dia >= 24 and $dia <= 31) {
                        echo "Você é de Virgem!";
                    }
                    break;
                case 9:
                    if ($dia >= 1 and $dia <= 23) {
                        echo "Você é de Virgem!";
                    } elseif ($dia >= 24 and $dia <= 30) {
                        echo "Você é de Libra!";
                    }
                    break;
                case 10:
                    if ($dia >= 1 and $dia <= 23) {
                        echo "Você é de Libra!";
                    } elseif ($dia >= 24 and $dia <= 31) {
                        echo "Você é de Escorpião!";
                    } 
                    break;
                case 11:
                    if ($dia >= 1 and $dia <= 22) {
                        echo "Você é de Escorpião!";
                    } elseif ($dia >= 23 and $dia <= 30) {
                        echo "Você é de Sagitário!";
                    }   
                    break;
                case 12:
                    if ($dia >= 1 and $dia <= 21) {
                        echo "Você é de Sagitário!";
                    } elseif ($dia >= 21 and $dia <= 31) {
                        echo "Você é de Capricórnio!";
                    }
                    break;
            }
            ?>            
        </div>
    </body>
</html>
