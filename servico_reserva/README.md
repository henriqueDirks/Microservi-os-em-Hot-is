Endpoints:

1. GET /criar_reserva.php:

   - Descrição: Este endpoint exibe a página para criar uma nova reserva. Ele inclui um formulário onde os usuários podem inserir seu email, data de check-in e data de check-out para reservar um quarto.
  
   - Parâmetros: Nenhum parâmetro é necessário.

   - Exemplo de Uso: 
     
     GET /criar_reserva.php
     

2. POST /criar_reserva.php:

   - Descrição: Este endpoint processa o formulário de criação de reserva. Ele recebe as informações fornecidas pelo usuário, como ID do quarto, email, data de check-in e data de check-out, e insere esses dados no banco de dados como uma nova reserva.
  
   - Parâmetros: 
     - idQuarto: O ID do quarto para o qual a reserva está sendo criada (inserido como um campo oculto no formulário).
     - email: O email fornecido pelo usuário para associar à reserva.
     - check_in: A data de check-in fornecida pelo usuário.
     - check_out: A data de check-out fornecida pelo usuário.

   - Exemplo de Uso: 
     
     POST /criar_reserva.php
     Content-Type: application/x-www-form-urlencoded

     idQuarto=123&email=user@example.com&check_in=2024-05-15&check_out=2024-05-20
