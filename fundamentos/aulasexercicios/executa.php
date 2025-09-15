<?php
// Incluir a classe "Pessoa" existente no arquivo aula8c.php
include("aula8c.php");

$pessoa = new Pessoa("Castanho", "Castanhos", 1.72, 84, "Marcio", "Branco", "PHP");

// Apresentando a pessoa
$pessoa->apresentar_pessoa();
$pessoa->estudar();

// Criando outra pessoa
echo "<br><br>";

$pessoa1 = new Pessoa("Preto", "Azuis", 1.69, 60, "Karen", "Preto", "Python");
$pessoa1->apresentar_pessoa();
$pessoa1->estudar();

if ($pessoa->nome == "Bianca"){
    echo "<br><br>Esta pessoa não foi criada ainda";
} else if($pessoa->nome == "Marcio") {
    echo "<br><br>O Marcio já foi criado";
} else {
    echo "<br><br>Você não informou um nome válido";
}

?>