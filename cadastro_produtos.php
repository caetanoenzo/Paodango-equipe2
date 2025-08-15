<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];
    $preco = $_POST['preco'];

    $sql = " INSERT INTO produtos (nome_produto, descricao_produto, quantidade_produto, validade_produto, preco_produto) VALUE ('$nome', '$descricao', '$quantidade', '$validade', '$preco')";

    if ($conn->query($sql) === true) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>

        <label for="validade">Validade:</label>
        <input type="date" name="validade" required>

        <label for="preco">Preço:</label>
        <input type="date" name="preco" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>