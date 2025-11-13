<?php
require_once __DIR__ . '/controllers/consultaController.php';

$acao = $_GET['acao'] ?? 'index';

switch ($acao) {
    case 'index':
        index();
        break;
    case 'form':
        form();
        break;
    case 'salvar':
        salvar();
        break;
    case 'editar':
        editar();
        break;
    case 'atualizar':
        atualizar();
        break;
    case 'deletar':
        deletar();
        break;
    default:
        echo "Ação inválida!";
}
?>