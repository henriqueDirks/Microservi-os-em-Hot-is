<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Quartos</title>
</head>
<body>
    <h1>Buscar Quartos</h1>

    <form method="get" action="resultado_busca.php">
        Disponibilidade:
        <select name="disponibilidade">
            <option value="qualquer">Qualquer</option>
            <option value="disponivel">Disponível</option>
            <option value="indisponivel">Indisponível</option>
        </select><br>
        Localização do Hotel: <input type="text" name="localizacao_hotel"><br>
        Data de Check-in: <input type="date" name="check_in" required><br>
        Data de Check-out: <input type="date" name="check_out" required><br>
        <input type="submit" value="Buscar">
    </form>

    <a href='../index.php'>Voltar</a>  
</body>
</html>
