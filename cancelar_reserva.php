<?php
    // Inclua o arquivo de conexão
    include '../conexao.php';

   

    // Processamento do cancelamento de reserva
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idReserva'])) {
        $idReserva = $_GET['idReserva'];

        // Consulta SQL para cancelar a reserva
        $cancelar_reserva_sql = "UPDATE Reserva SET status = 'cancelada' WHERE idReserva = $idReserva";
        if ($mysqli->query($cancelar_reserva_sql)) {
            echo "<p>Reserva cancelada com sucesso!</p>";
            // Aguardar 3 segundos antes de redirecionar
            echo "<script>setTimeout(function() { window.location.href = 'implementacaoCancelamento.php'; }, 3000);</script>";
        } else {
            echo "<p>Erro ao cancelar reserva: " . $mysqli->error . "</p>";
        }
    }
    ?>