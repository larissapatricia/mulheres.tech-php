<?php
    $idade = 16;
    $responsavel = true;

    if ($idade >= 18){
        echo "Entra na festa!";
    } else {
        if ($responsavel == true){
            echo "Entra na festa, apesar de ser menor";
        } else {
            echo "Barrado, pois é menor de idade!";
        }
        
    }

?>