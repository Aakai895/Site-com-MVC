<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Consulta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Editar Consulta</h1>
    <form method="POST" action="index.php?acao=atualizar">
        <input type="hidden" name="id" value="<?= $consulta['id'] ?>">
        <label>Paciente:</label><br><input type="text" name="paciente"
            value="<?= htmlspecialchars($consulta['paciente']) ?>"><br><br>
        <label>Médico:</label><br><input type="text" name="medico"
            value="<?= htmlspecialchars($consulta['medico']) ?>"><br><br>
        <label>Data:</label><br><input type="date" name="data"
            value="<?= htmlspecialchars($consulta['data']) ?>"><br><br>
        <label>Especialidade:</label><br><input type="text" name="especialidade"
            value="<?= htmlspecialchars($consulta['especialidade']) ?>"><br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>

</html>