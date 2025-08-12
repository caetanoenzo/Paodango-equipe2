<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];

    $sql = " INSERT INTO produtos (nome_produto, quantidade_produto, validade_produto) VALUE ('$nome', '$quantidade'. '$validade')";

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

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>

        <label for="validade">Quantidade:</label>
        <input type="date" name="validade" required>

        <input type="submit" value="Adicionar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>