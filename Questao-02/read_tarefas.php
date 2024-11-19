<?php
require_once 'database.php';

function lerTarefas() {
    try {
        $pdo = conectarBancoDados();
        $stmt = $pdo->query("SELECT * FROM tarefas ORDER BY concluir, id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        return ["erro" => $e->getMessage()];
    }
}
?>