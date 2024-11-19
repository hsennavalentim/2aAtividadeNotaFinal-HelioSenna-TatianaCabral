<?php
require_once 'database.php';

function atualizarTarefa($id, $descricao, $dtvenc, $concluir) {
    try {
        $pdo = conectarBancoDados();
        $stmt = $pdo->prepare("UPDATE tarefas SET descricao = :descricao, dtvenc = :dtvenc, concluir = :concluir WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':dtvenc', $dtvenc);
        $stmt->bindParam(':concluir', $concluir);

        return $stmt->execute() ? "Registro atualizado com sucesso!" : "Erro ao atualizar registro!";
    } catch (PDOException $e) {
        return "Erro: " . $e->getMessage();
    }
}
?>