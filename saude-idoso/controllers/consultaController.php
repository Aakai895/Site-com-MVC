<?php
require_once __DIR__ . '/../models/Consulta.php';

function index()
{
    $consultas = listarConsultas();
    require __DIR__ . '/../views/consultas_listar.php';
}

function form()
{
    require __DIR__ . '/../views/consultas_form.php';
}

function salvar()
{
    if (!empty($_POST['paciente']) && !empty($_POST['medico']) && !empty($_POST['data']) && !empty($_POST['especialidade'])) {
        adicionarConsulta($_POST['paciente'], $_POST['medico'], $_POST['data'], $_POST['especialidade']);
    }
    header('Location: index.php');
}

function editar()
{
    $consulta = buscarConsulta($_GET['id']);
    require __DIR__ . '/../views/consultas_editar.php';
}

function atualizar()
{
    if (!empty($_POST)) {
        atualizarConsulta($_POST['id'], $_POST['paciente'], $_POST['medico'], $_POST['data'], $_POST['especialidade']);
    }
    header('Location: index.php');
}

function deletar()
{
    if (!empty($_GET['id'])) {
        excluirConsulta($_GET['id']);
    }
    header('Location: index.php');
}
?>