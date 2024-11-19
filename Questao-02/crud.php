<?php
require_once 'add_tarefa.php';
require_once 'read_tarefas.php';
require_once 'update_tarefa.php';
require_once 'delete_tarefa.php';

// Verificar a ação
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create':
        $resultado = criarTarefa($_POST['descricao'], $_POST['dtvenc'], $_POST['concluir']);
        echo $resultado;
        break;
    
    case 'read':
        $tarefas = lerTarefas();
        echo json_encode($tarefas);
        break;
    
    case 'update':
        $resultado = atualizarTarefa($_POST['id'], $_POST['descricao'], $_POST['dtvenc'], $_POST['concluir']);
        echo $resultado;
        break;
    
    case 'delete':
        $resultado = deletarTarefa($_GET['id']);
        echo $resultado;
        break;
}
?>