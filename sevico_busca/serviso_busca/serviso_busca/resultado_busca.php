<?php
// Inclua o arquivo de conexão
include '../conexao.php';

// Processamento da busca
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Verifica se os parâmetros estão definidos e não estão vazios
    $disponibilidade = isset($_GET["disponibilidade"]) ? $_GET["disponibilidade"] : "qualquer";
    $localizacao_hotel = isset($_GET["localizacao_hotel"]) ? $_GET["localizacao_hotel"] : "";
    $check_in = isset($_GET["check_in"]) ? $_GET["check_in"] : "";
    $check_out = isset($_GET["check_out"]) ? $_GET["check_out"] : "";

    // Construir a consulta SQL baseada nos critérios especificados
    $sql = "SELECT q.*, h.Localizacao as LocalizacaoHotel FROM Quarto q
            INNER JOIN Hotel h ON q.idHotel = h.idHotel
            WHERE 1=1";

    // Filtrar por disponibilidade
    if ($disponibilidade != "qualquer") {
        $sql .= " AND q.Disponibilidade = '$disponibilidade'";
    }

    // Filtrar por localização do hotel se houver
    if (!empty($localizacao_hotel)) {
        $sql .= " AND h.Localizacao LIKE '%$localizacao_hotel%'";
    }

    // Verificar a disponibilidade do quarto para as datas especificadas
    if (!empty($check_in) && !empty($check_out)) {
        $sql .= " AND q.idQuarto NOT IN (
            SELECT idQuarto FROM Reserva 
            WHERE ('$check_in' BETWEEN check_in AND check_out 
            OR '$check_out' BETWEEN check_in AND check_out)
        )";
    }

    // Executar a consulta
    $result = $mysqli->query($sql);

    // Exibir os resultados da busca
    if ($result->num_rows > 0) {
        echo "<h2>Resultados da Busca:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>{$row['descricao']} - Disponibilidade: {$row['Disponibilidade']} - Localização do Hotel: {$row['LocalizacaoHotel']} 
                <a href='../servico_reserva\implementacaoReserva.php?idQuarto={$row['idQuarto']}'>Criar Reserva</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum quarto encontrado com os critérios especificados.";
    }
    
}
?>
