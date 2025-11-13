<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consultas - Saúde do Idoso</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>💙 Consultas Médicas</h1>
    <a href="index.php?acao=form" class="botao">Nova Consulta</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Paciente</th>
            <th>Médico</th>
            <th>Data</th>
            <th>Especialidade</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($consultas as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= htmlspecialchars($c['paciente']) ?></td>
                <td><?= htmlspecialchars($c['medico']) ?></td>
                <td><?= htmlspecialchars($c['data']) ?></td>
                <td><?= htmlspecialchars($c['especialidade']) ?></td>
                <td>
                    <a href="index.php?acao=editar&id=<?= $c['id'] ?>">Editar</a> |
                    <a href="index.php?acao=deletar&id=<?= $c['id'] ?>"
                        onclick="return confirm('Deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>