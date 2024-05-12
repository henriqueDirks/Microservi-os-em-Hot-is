<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Criar Reserva</title>
</head>
<body>
    <h1>Criar Reserva</h1>

    <?php
    // Inclua o arquivo de conexão
    include '../conexao.php';

    // Processamento do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quarto_id = $_POST["quarto_id"];

        // Inserir reserva no banco de dados
        $query = "INSERT INTO reserva ( idQuarto) VALUES ( $quarto_id)";


        if ($mysqli->query($query)) {
            echo "Reserva criada com sucesso!";
        } else {
            echo "Erro ao criar reserva: " . $mysqli->error;
        }
    }
    ?>

    <!-- Formulário para criar reserva -->
    <form method="post" action="">
        
        ID do Quarto: <input type="number" name="quarto_id" required><br>
        <input type="submit" value="Criar Reserva">
    </form>
    <a href='../index.php'>Voltar</a>
</body>
</html>
