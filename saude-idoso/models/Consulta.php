<?php
require_once __DIR__ . '/../config/database.php';

function listarConsultas()
{
    $pdo = getConnection();
    $sql = "SELECT * FROM consultas";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function adicionarConsulta($paciente, $medico, $data, $especialidade)
{
    $pdo = getConnection();
    $sql = "INSERT INTO consultas (paciente, medico, data, especialidade) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$paciente, $medico, $data, $especialidade]);
}

function buscarConsulta($id)
{
    $pdo = getConnection();
    $sql = "SELECT * FROM consultas WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarConsulta($id, $paciente, $medico, $data, $especialidade)
{
    $pdo = getConnection();
    $sql = "UPDATE consultas SET paciente=?, medico=?, data=?, especialidade=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$paciente, $medico, $data, $especialidade, $id]);
}

function excluirConsulta($id)
{
    $pdo = getConnection();
    $sql = "DELETE FROM consultas WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
?>