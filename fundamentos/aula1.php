<?php
    // Primeiro Programa
    echo "Olá, mundo!";
    // Declaração de variáveis
    $idade = 17;
    $altura = 1.65;
    $nome = "Larissa Patricia";
    $trabalho = true;

    // Exemplo de Concatenação Classica 
    echo " <br>Meu nome é " . $nome ." tenho " . $idade . " anos, minha altura é de " . $altura . ". Se eu trabalho? " . $trabalho . ".";
    // Exemplo de Concatenação Corrida
    echo " <br>Meu nome é $nome, tenho $idade anos, minha altura é de $altura. Se eu trabalho? $trabalho.";
    
    // Operadores Aritméticos
    $x = 10;
    $y = 15;
    $soma = $x + $y;
    $subtracao = $x - $y;
    $multiplicacao = $x * $y;
    $divisao = $x / $y;
    $resto = $x % $y;

    echo "<br>Soma de " . $x . " e " . $y . ": " . $soma;
    echo "<br> Subtração de " . $x . " e " . $y . ": " . $subtracao;
    echo "<br> Multiplicação de $x e $y: $multiplicacao";
    echo "<br> Divisão de $x e $y: $divisao";
    echo "<br> Resto da divisão: $resto";

    // Transformação do tipo da variável
    $div_inteiro = intval($divisao);
    echo "<br>Divisão emtre $x e $y: $div_inteiro";

    $num1 = 4;
    $num2 = 2;
    $div = $num1 / $num2;
    $div_float = floatval ($div);

    echo "<br>Resultado $div_float";


?>