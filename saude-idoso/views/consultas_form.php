<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nova Consulta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Adicionar Consulta</h1>
    <form method="POST" action="index.php?acao=salvar">
        <label>Paciente:</label><br><input type="text" name="paciente"><br><br>
        <label>Médico:</label><br><input type="text" name="medico"><br><br>
        <label>Data:</label><br><input type="date" name="data"><br><br>
        <label>Especialidade:</label><br><input type="text" name="especialidade"><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>