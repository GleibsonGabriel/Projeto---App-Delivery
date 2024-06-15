<?php
echo '<link rel="stylesheet" href="styles.css">';
echo '<div class="container">';
// Função para validar e sanitizar os dados de entrada
function validarEntrada($data) {
    return isset($data) && !empty(trim($data));
}

// Verificação de entrada
if (validarEntrada($_GET['tempo']) && validarEntrada($_GET['velocidade']) && validarEntrada($_GET['km_litro']) && validarEntrada($_GET['preco_litro'])) {
    $tempo = $_GET['tempo'];
    $velocidade = floatval($_GET['velocidade']);
    $km_litro = floatval($_GET['km_litro']);
    $preco_litro = str_replace(',', '.', $_GET['preco_litro']);

    // Verificação do formato do tempo
    if (preg_match('/^\d{1,2}:\d{2}$/', $tempo)) {
        $tempo_array = explode(':', $tempo);
        $horas = intval($tempo_array[0]);
        $minutos = intval($tempo_array[1]);
        $tempo_decimal = $horas + $minutos / 60;

        // Cálculos
        $distancia = number_format(($tempo_decimal * $velocidade), 2);
        $consumo = round($distancia / $km_litro);
        $gastoTotal = $consumo * $preco_litro;
        $gastoTotalFormat = number_format($gastoTotal, 2);

        // Exibição dos resultados
        echo "Duração da viagem: " . htmlspecialchars($tempo) . " horas<br>";
        echo "Velocidade média: " . htmlspecialchars($velocidade) . " KM/h<br>";
        echo "Consumo médio de combustível: " . htmlspecialchars($km_litro) . " KM/l<br>";
        echo "<br>Distância percorrida: " . $distancia . " KM<br>";
        echo "Consumo médio: " . $consumo . " Litros<br>";
        echo "Gasto total da viagem: R$ " . $gastoTotalFormat . "<br>";
    } else {
        echo "Formato de tempo inválido. Use o formato hh:mm.<br>";
    }
} else {
    echo "Todos os campos são obrigatórios.<br>";
}

// Botão de voltar
echo '<form action="index.php" method="post">';
echo '<input type="submit" value="Voltar">';
echo '</form>';
echo '</div>';
echo '<footer>';
echo '<p>Autores: Gleibson Gabriel do Nascimento Soares, Rafaela Barbosa da Silva e Higor Henrique Lima Sanches</p>';
echo '</footer>';
?>
