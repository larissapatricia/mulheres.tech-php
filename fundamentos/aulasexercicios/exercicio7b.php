<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="exercicio8.php" method="get">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo" required>
        <br><br>
        <label for="tel">Telefone: </label>
        <input type="number" name="tel" id="tel" required>
        <br><br>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="nascimento">Data de Nascimento: </label>
        <input type="date" name="nascimento" id="nascimento">
        <br><br>
        <label for="endereco">Endereço: </label>
        <input type="text" name="endereco" id="endereco">
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>