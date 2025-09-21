<?php
require 'conexao.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        // Redireciona para a lista após apagar
        header("Location: listar.php");
        exit;
    } else {
        echo "Erro ao apagar produto.";
    }
} else {
    echo "ID do produto não informado.";
}
?>
