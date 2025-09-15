<?php
     // COENXÃO COM O BANCO DE DADOS
    $servidor = "localhost";
    $user_banco = "root";
    $senha_banco = "";
    $banco = "senac";
    $conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);
        // CAPTANDO OS DADOS DO FORMULÁRIO DE LOGIN
    $usuario = $_POST ['usuario'];
    $senha = $_POST ['senha'];
    $consulta = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
   $executa = $conexao->query($consulta);
    // TESTANDO PARA VER SE TEM NO BANCO
    if ($executa->num_rows > 0){
        echo "<br> Usuário logado no sistema";

    } else {
        echo "<br> Usuário ou Senha Incorreta";
    }


  ?>