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
        $nome_hospede = $_POST["nome_hospede"];
        $quarto_id = $_POST["quarto_id"];
        $checkin = $_POST["checkin"];
        $checkout = $_POST["checkout"];

        // Inserir reserva no banco de dados
        $query = "INSERT INTO reserva (nome_hospede, quarto_id, checkin, checkout) VALUES ('$nome_hospede', $quarto_id, '$checkin', '$checkout')";


        if ($mysqli->query($query)) {
            // Atualizar o status do quarto para 'Ocupado'
            //$updateQuery = "UPDATE quarto SET status = 'Ocupado' WHERE id = $quarto_id";
            //$mysqli->query($updateQuery);

            echo "Reserva criada com sucesso!";
        } else {
            echo "Erro ao criar reserva: " . $mysqli->error;
        }
    }
    ?>

    <!-- Formulário para criar reserva -->
    <form method="post" action="">
        Nome do Hóspede: <input type="text" name="nome_hospede" required><br>
        ID do Quarto: <input type="number" name="quarto_id" required><br>
        Data de Check-in: <input type="date" name="checkin" required><br>
        Data de Check-out: <input type="date" name="checkout" required><br>
        <input type="submit" value="Criar Reserva">
    </form>
    <a href='index.php'>Voltar</a>
</body>
</html>
