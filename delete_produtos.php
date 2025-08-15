<?php

include 'db.php';
$id = $_GET['id'];

$sql = " DELETE FROM produtos WHERE id_produto=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído com sucesso.
        <a href='read_produtos.php'>Ver registros.</a>
        ";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();