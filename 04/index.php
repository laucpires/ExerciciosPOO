<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>
<body>
    <form action="./04.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="matricula">Matrícula:</label>
        <input type="number" name="matricula">
        <br>
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.01">
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.01">
        <br>
        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.01">
        <br>
        <input type="submit">
    </form>
</body>
</html>
