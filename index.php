<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Peso Corporal</title>
</head>
<body>
    <h1>Calculadora de Peso Corporal</h1>

    <!-- Formulário para entrada de nome e peso -->
    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Peso (kg): <input type="number" name="peso" step="0.1" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados enviados pelo formulário
        $nome = $_POST["nome"];
        $peso = $_POST["peso"];

        // Exibe o nome e peso da pessoa
        echo "<h2>Resultado:</h2>";
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Peso: " . htmlspecialchars($peso) . " kg<br>";
    }
    ?>
</body>
</html>