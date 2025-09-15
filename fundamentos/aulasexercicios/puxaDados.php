<?php
// CONEXÃO COM O BANCO DE DADOS
$servidor = "localhost";
$user_banco = "root";
$senha_banco = "";
$banco = "senac";

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);


// EXECUTAR O COMANDO PARA LISTAR
$lista = "SELECT * FROM alunos";
$listarexec = $conexao->query($lista);
if ($listarexec->num_rows > 0){
    echo "<table>";
    echo "
        <tr>
            <th>Nome</th>
            <th>Curso</th>
        </tr>
    ";
    while($linha = $listarexec->fetch_assoc()){
        echo"<tr><td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['curso'] . "</td></tr>";        
    }
    echo "</table>";   
} else {
    echo "<br>Dados não encontrados";
}


?>