<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
</head>
<body>
    <h2>Calculadora Simples</h2>

    <form action="controller.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" step="any" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" step="any" required><br><br>

        <label for="operacao">Operação:</label>
        <select name="operacao" required>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
