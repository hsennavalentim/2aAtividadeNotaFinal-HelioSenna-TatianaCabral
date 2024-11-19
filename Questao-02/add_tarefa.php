<?php
require_once 'database.php';

function criarTarefa($descricao, $dtvenc, $concluir) {
    try {
        $pdo = conectarBancoDados();
        $stmt = $pdo->prepare("INSERT INTO tarefas (descricao, dtvenc, concluir) VALUES (:descricao, :dtvenc, :concluir)");
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':dtvenc', $dtvenc);
        $stmt->bindParam(':concluir', $concluir);

        return $stmt->execute() ? "Registro criado com sucesso!" : "Erro ao criar registro!";
    } catch (PDOException $e) {
        return "Erro: " . $e->getMessage();
    }
}
?>