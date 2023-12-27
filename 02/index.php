<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <form action="./02.php" method="get">
        <label for="conta">Número da Conta:</label>
        <input type="number" name="conta">
        <br>
        <label for="titular">Nome do Titular:</label>
        <input type="text" name="titular">
        <br>
        <label for="saldo">Saldo:</label>
        <input type="number" name="saldo" step="0.01">
        <br>
        <label for="valorDeposito">Valor para Depósito:</label>
        <input type="number" name="valorDeposito" step="0.01">
        <br>
        <label for="valorSaque">Valor para Saque:</label>
        <input type="number" name="valorSaque" step="0.01">
        <br>
        <input type="submit">
    </form>
</body>

</html>
