<?php
    // CONEXÃO COM O BANCO DE DADOS
    $servidor = "localhost";
    $user_banco = "root";
    $senha_banco = "";
    $banco = "senac";
    $conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);

    // CONEXÃO DEU CERTO?
    if($conexao->connect_error) {
        echo "Deu ruim";

    } else {
        echo "Deu bom! A conexão foi feita";
    }
    // Inserção dos dados no banco
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $inserir= "INSERT INTO login VALUES (DEFAULT, '$usuario', '$senha')";

    $conexao->query($inserir);

    echo "<br>Dados inseridos com sucesso";
?>