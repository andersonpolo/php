<?php

$dias = array ("Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira",
              "Quinta-Feira","Sexta-Feira","Sábado");

$dia = date("w");

foreach ($dias as $dia){
    
    
    
    echo "Hoje é $dia.<br>";
}

?>