<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Deletar Reserva</title>
</head>
<body>
    <h1>Deletar Reserva</h1>

    <?php
    // Inclua o arquivo de conexão
    include '../conexao.php';

    // Processamento do formulário
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $reserva_id = $_POST["reserva_id"];

        // Obter o ID do quarto associado à reserva
        $quartoQuery = "SELECT quarto_id FROM reserva WHERE id = $reserva_id";
        $result = $mysqli->query($quartoQuery);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $quarto_id = $row["quarto_id"];

            // Excluir reserva do banco de dados
            $deleteQuery = "DELETE FROM reserva WHERE id = $reserva_id";

            if ($mysqli->query($deleteQuery)) {
                // Atualizar o status do quarto para 'Disponível'
                //$updateQuery = "UPDATE quarto SET status = 'Disponível' WHERE id = $quarto_id";
                //$mysqli->query($updateQuery);

                echo "Reserva excluída com sucesso!";
            } else {
                echo "Erro ao excluir reserva: " . $mysqli->error;
            }
            
        } else {
            echo "Reserva não encontrada.";
        }
    }
    ?>

    <!-- Formulário para deletar reserva -->
    <form method="post" action="">
        ID da Reserva: <input type="number" name="reserva_id" required><br>
        <input type="submit" value="Deletar Reserva">
    </form>
    <a href='index.php'>Voltar</a>
</body>
</body>
</html>
