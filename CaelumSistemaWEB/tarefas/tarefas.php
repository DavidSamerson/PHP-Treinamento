<?php

session_start();

include "banco.php";
include "ajudantes.php";

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $tarefa = array();

    $tarefa['nome'] = $_GET['nome'];

    if (isset($_GET['descricao'])) {
        $tarefa['descricao'] = $_GET['descricao'];
    } else {
        $tarefa['descricao'] = '';
    }

    if (isset($_GET['prazo'])) {
        // $tarefa['prazo'] = $_GET['prazo'];
        $tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
    } else {
        $tarefa['prazo'] = '';
    }

    $tarefa['prioridade'] = $_GET['prioridade'];

    if (isset($_GET['concluida'])) {
        // $tarefa['concluida'] = $_GET['concluida'];
        $tarefa['concluida'] = 1;
    } else {
        // $tarefa['concluida'] = '';
        $tarefa['concluida'] = 0;
    }

    // $_SESSION['lista_tarefas'][] = $tarefa;
    gravar_tarefa($conexao, $tarefa);
}

$lista_tarefas = buscar_tarefas($conexao);

// if (isset($_SESSION['lista_tarefas'])) {
//     // $lista_tarefas = $_SESSION['lista_tarefas'];
// } else {
//     $lista_tarefas = array();
// }

include "template.php";

?>
