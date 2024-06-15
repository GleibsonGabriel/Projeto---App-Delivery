<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery de Comida</title>
    <style>
        body {
            background-color: #3498db; /* Azul */
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .restaurant-list {
            list-style: none;
            padding: 0;
        }
        .restaurant-item {
            background-color: #2980b9; /* Azul mais escuro */
            padding: 10px;
            margin-bottom: 10px;
        }
        .restaurant-item a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Escolha um Restaurante</h1>
        <ul class="restaurant-list">
            <li class="restaurant-item"><a href="menu.php?restaurant_id=1">Restaurante 1</a></li>
            <li class="restaurant-item"><a href="menu.php?restaurant_id=2">Restaurante 2</a></li>
            <li class="restaurant-item"><a href="menu.php?restaurant_id=3">Restaurante 3</a></li>
        </ul>
        <h2>Cadastrar Endereço e Nome do Cliente</h2>
        <form action="cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
