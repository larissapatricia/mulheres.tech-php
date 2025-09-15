<?php
// Funções
function somar (){
    $x = 5;
    $y = 10;
    $resultado = $x + $y;
    return $resultado;

}

echo somar();

    // Função com parâmetro
    function somar1($x, $y){
        $resultado = $x + $y;
        return $resultado;
    }

    echo somar1(20, 5);
    echo somar1(2,7);
    echo somar1(0,71);
    echo somar1(20,5) + somar1(0,8);

?>
