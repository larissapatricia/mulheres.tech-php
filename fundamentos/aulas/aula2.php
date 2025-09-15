<?php
    $pontuacao = 0;
    $resposta = [];
    echo "Jogo de Perguntas";
    // 1º Questão
    echo "<br> 1. Qual era o nome do 'descobridor' do Brasil?
          <br> a. Cabral
          <br> b. Cabril
          <br> c. Cabrol
    ";
    $resposta[0] = "a";
    echo "<br>Resposta: " . $resposta[0];
    if ($resposta[0] == "a"){
        echo "<br>Resposta correta!";
        $pontuacao++; // É o mesmo que $pontuacao = $pontuacao + 1;
    } else {
        echo "<br>Você errou!";
    }

    //2º Questão
    echo "<br>Qual era a cor do cavalo Branco de Napoleão?
          <br>a. Branco
          <br>b. Marrom
          <br>c. Preto
    ";
    $resposta[1] = "b";
    echo "Resposta: " . $resposta[1];
    if ($resposta[1] == "a"){
        echo "<br>Errou! Branco era o nome do Cavalo de Napoleão, mas a cor dele era marrom";
    } else if ($resposta[1] == "b"){
        echo "<br>Acertou! Parabéns!";
        $pontuacao++;
    } else if ($resposta[1] == "c"){
        echo "<br>Misercórdia! Vai estudar!";
    } else {
        echo "<br>Você escolheu uma opção inválida.";
    }
    // 3ª Questão
    echo "<br>3. Qual é a capital do Brasil?
          <br>a. Pavuna
          <br>b. Maricá
          <br>c. Brasilia
    ";
    $resposta[2] = "c";
    switch ($resposta[2]){
        case "a":
            echo "<br>Pavuna é um bairro do Rio de Janeiro";
            break;
        case "b":
            echo "<br>Maricá é um município do Estado do Rio";
            break;
        case "c":
            echo "<br>Parabéns, você acertou!";
            $pontuacao++;
            break;
        default:
            echo "<br>Opção inválida";
            break;
    }

    echo "<br>Você tirou, deixa-me ver... ";
    $x = 1;
    while($x <= $pontuacao){
        echo "<br>$x";
        $x++;
    }
    echo " pontos";

    // A mesma contagem, mas usando o 'for'
    echo "<br>Vou contar de novo!";
    for ($x = 1; $x <= $pontuacao; $x++){
        echo "<br>$x";
    }
    echo " pontos";
    

?>