<?php
require_once 'database.php';

function deletarTarefa($id) {
    try {
        $pdo = conectarBancoDados();
        $stmt = $pdo->prepare("DELETE FROM tarefas WHERE id = :id");
        $stmt->bindParam(':id', $id);

        return $stmt->execute() ? "Registro deletado com sucesso!" : "Erro ao deletar registro!";
    } catch (PDOException $e) {
        return "Erro: " . $e->getMessage();
    }
}
?>