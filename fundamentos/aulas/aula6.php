<?php
    // Tipos de Variáveis
    $nome = "Marcio"; // String
    $idade = 40; // int
    $altura = 1.72; // float
    $vivo = true; // bool

    // Arrays
    $frutas = ["Uva", "Banana", "Maçã"];
    $casas = [102, 104, 106];
    $cadastro1 = ["Marcio", 40, 1.72];
    $cadastro_pessoa = array(
        "Nome" => "Marcio",
        "Idade" => 40,
        "Altura" => 1.72
    );

    echo $cadastro_pessoa["Nome"] . "<br>";
    echo $cadastro_pessoa["Idade"];

    $cadastro_pessoa1 = array(
        array(
            "Nome" => "Ana",
            "Idade" => 35,
            "Altura" => 1.70
        ),
        array(
            "Nome" => "Caren",
            "Idade" => 34,
            "Altura" => 1.58
        )
    );

    echo "<br>" . $cadastro_pessoa1[1]["Nome"];

?>