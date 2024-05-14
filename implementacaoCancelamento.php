<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelar Reserva</title>
</head>
<body>
    <h1>Cancelar Reserva</h1>

    <!-- Formulário para inserir o email -->
    <form method="post" action="">
        Email: <input type="email" name="email" required>
        <input type="submit" name="submit_email" value="Buscar Reservas">
    </form>

    <?php
    // Inclua o arquivo de conexão
    include '../conexao.php';

    // Processamento do formulário de busca de reservas por email
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_email'])) {
        $email = $_POST['email'];

        // Consulta SQL para buscar reservas associadas ao email fornecido
        $consulta_reservas_sql = "SELECT r.*, h.Nome as NomeHotel, h.Localizacao as LocalizacaoHotel, q.descricao as DescricaoQuarto 
                                  FROM Reserva r
                                  JOIN Quarto q ON r.idQuarto = q.idQuarto
                                  JOIN Hotel h ON q.idHotel = h.idHotel
                                  WHERE r.email = '$email'";
        $resultado_consulta = $mysqli->query($consulta_reservas_sql);

        // Verifique se foram encontradas reservas para o email fornecido
        if ($resultado_consulta->num_rows > 0) {
            // Exibir as reservas encontradas
            echo "<h2>Reservas Encontradas para o Email $email:</h2>";
            echo "<ul>";
            while ($row = $resultado_consulta->fetch_assoc()) {
                $check_in = $row['check_in'];
                $check_out = $row['check_out'];
                $status = $row['status'];
                $nome_hotel = $row['NomeHotel'];
                $localizacao_hotel = $row['LocalizacaoHotel'];
                $descricao_quarto = $row['DescricaoQuarto'];

                echo "<li>Hotel: $nome_hotel - Localização: $localizacao_hotel - Quarto: $descricao_quarto - Check-in: $check_in - Check-out: $check_out - Status: $status ";
                echo "<a href='cancelar_reserva.php?idReserva={$row['idReserva']}'>Cancelar Reserva</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhuma reserva encontrada para o email fornecido.</p>";
        }
    }

    // Processamento do cancelamento de reserva
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idReserva'])) {
        $idReserva = $_GET['idReserva'];

        // Consulta SQL para cancelar a reserva
        $cancelar_reserva_sql = "UPDATE Reserva SET status = 'cancelada' WHERE idReserva = $idReserva";
        if ($mysqli->query($cancelar_reserva_sql)) {
            echo "<p>Reserva cancelada com sucesso!</p>";
            // Aguardar 3 segundos antes de redirecionar
            echo "<script>setTimeout(function() { window.location.href = 'cancelar_reserva.php'; }, 3000);</script>";
        } else {
            echo "<p>Erro ao cancelar reserva: " . $mysqli->error . "</p>";
        }
    }
    ?>

</body>
</html>
