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
    $idReserva = $_POST["idReserva"];

    // Obter o ID do quarto associado à reserva
    $quartoQuery = "SELECT idQuarto FROM reserva WHERE idReserva = $idReserva";
    $result = $mysqli->query($quartoQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $idQuarto = $row["idQuarto"];

        // Excluir reserva do banco de dados
        $updateQuery = "UPDATE `reserva` SET `status`='1' WHERE idReserva = $idReserva";
        
        if ($mysqli->query($updateQuery)) {
            echo "Reserva excluída com sucesso!";
        } else {
            echo "Erro ao excluir reserva: " . $mysqli->error;
        }

    } else {
        echo "Reserva não encontrada.";
    }
}
?>


    <form method="post" action="">
        ID da Reserva: <input type="number" name="idReserva" required><br>
        <input type="submit" value="Deletar Reserva">
    </form>
    <a href='../index.php'>Voltar</a>
</body>
</body>

</html>