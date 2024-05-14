<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Reserva</title>
</head>
<body>
    <h1>Criar Reserva</h1>

    <?php
    // Inclua o arquivo de conexão
    include '../conexao.php';

    // Verifique se o ID do quarto foi fornecido através do parâmetro GET
    if (isset($_GET["idQuarto"])) {
        // Recupere o ID do quarto da URL
        $idQuarto = $_GET["idQuarto"];

        // Consulta SQL para recuperar as informações do quarto e do hotel associado
        $consulta_quarto_sql = "SELECT q.*, h.Nome AS NomeHotel, h.Localizacao AS LocalizacaoHotel FROM Quarto q 
                                INNER JOIN Hotel h ON q.idHotel = h.idHotel 
                                WHERE q.idQuarto = $idQuarto";
        $resultado_consulta = $mysqli->query($consulta_quarto_sql);

        // Verifique se a consulta retornou algum resultado
        if ($resultado_consulta->num_rows > 0) {
            // Recupere os dados do quarto e do hotel associado
            $row = $resultado_consulta->fetch_assoc();
            $tipo_quarto = $row["tipo"];
            $descricao_quarto = $row["descricao"];
            $disponibilidade_quarto = $row["Disponibilidade"];
            $nome_hotel = $row["NomeHotel"];
            $localizacao_hotel = $row["LocalizacaoHotel"];

            // Imprima as informações do quarto e do hotel
            echo "<h2>Informações do Quarto:</h2>";
            echo "<p><strong>Tipo:</strong> $tipo_quarto</p>";
            echo "<p><strong>Descrição:</strong> $descricao_quarto</p>";
            echo "<p><strong>Disponibilidade:</strong> $disponibilidade_quarto</p>";
            echo "<h2>Informações do Hotel:</h2>";
            echo "<p><strong>Nome:</strong> $nome_hotel</p>";
            echo "<p><strong>Localização:</strong> $localizacao_hotel</p>";
        } else {
            echo "Quarto não encontrado.";
        }
    }
    ?>

    <!-- Formulário para criar reserva -->
    <form method="post" action="">
        <?php
        // Verifique se o ID do quarto foi fornecido, se sim, inclua-o no formulário como um campo oculto
        if (isset($idQuarto)) {
            echo "<input type='hidden' name='idQuarto' value='$idQuarto'>";
        }
        ?>
        Email: <input type="email" name="email" required><br>
        Data de Check-in: <input type="date" name="check_in" required><br>
        Data de Check-out: <input type="date" name="check_out" required><br>
        <input type="submit" name="submit" value="Criar Reserva">
    </form>
    <a href='../index.php'>Voltar</a>

    <?php
    // Processamento do formulário de criação de reserva
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $idQuarto = $_POST['idQuarto'];
        $email = $_POST['email'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];

        // Insira a reserva no banco de dados
        $inserir_reserva_sql = "INSERT INTO Reserva (idQuarto, email, check_in, check_out) 
                                VALUES ('$idQuarto', '$email', '$check_in', '$check_out')";
        if ($mysqli->query($inserir_reserva_sql)) {
            echo "<p>Reserva criada com sucesso!</p>";
        } else {
            echo "<p>Erro ao criar reserva: " . $mysqli->error . "</p>";
        }
    }
    ?>
</body>
</html>
