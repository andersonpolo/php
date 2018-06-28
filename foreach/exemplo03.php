<?php

$dll = date("w");

$dias = array ("Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira",
              "Quinta-Feira","Sexta-Feira","Sábado");



foreach ($dias as $dia => $hoje){
    
    if($dia==$dll)  echo "Hoje é $hoje.<br>";

}

?>