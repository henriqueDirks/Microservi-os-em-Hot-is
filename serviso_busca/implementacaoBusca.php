<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Quartos disponiveis</title>
</head>

<body>
    <h1>Quartos disponiveis</h1>

    <?php
    // Inclua o arquivo de conexão
    include '../conexao.php';

    // Consulta para selecionar todos os quartos que não estão reservados
    $query = "SELECT * FROM Quarto WHERE idQuarto NOT IN (SELECT idQuarto FROM Reserva WHERE status = 'ativa')";

    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        echo "<h2>Quartos Disponíveis</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>Quarto ID: " . $row["idQuarto"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Não há quartos disponíveis no momento.";
    }

    // Feche a conexão
    $mysqli->close();
    ?>


</html>

<a href='../index.php'>Voltar</a>
</body>

</html>