<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Viagem</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Viagem</h1>
        <form action="processamento.php" method="get">
            <label for="tempo">Tempo (hh:mm):</label>
            <input type="text" name="tempo" id="tempo" required><br><br>
            <label for="velocidade">Velocidade (KM/h):</label>
            <input type="number" name="velocidade" id="velocidade" required><br><br>
            <label for="km_litro">Consumo médio (KM/l):</label>
            <input type="number" name="km_litro" id="km_litro" required><br><br>
            <label for="preco_litro">Preço do litro (R$):</label>
            <input type="text" name="preco_litro" id="preco_litro" required><br><br>
            <input type="submit" value="Calcular">
        </form>
        <footer>
            <p>Autores: Gleibson Gabriel do Nascimento Soares, Rafaela Barbosa da Silva e Higor Henrique Lima Sanches</p>
        </footer>
    </div>
</body>
</html>
