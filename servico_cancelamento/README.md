Este código PHP tem como objetivo fornecer uma interface para cancelar reservas em um sistema de reservas de hotéis. Ele consiste em duas partes principais:

Formulário de Busca de Reservas por Email:

Um formulário simples onde o usuário pode inserir seu email.
Quando o usuário envia o formulário, o sistema busca no banco de dados por reservas associadas a esse email.
Se reservas forem encontradas, elas são exibidas na página com a opção de cancelamento.
Cancelamento de Reserva:

Cada reserva encontrada na busca é acompanhada de um link "Cancelar Reserva".
Ao clicar nesse link, a reserva correspondente é marcada como "cancelada" no banco de dados.
Após o cancelamento bem-sucedido, a página é atualizada automaticamente após 3 segundos.
Endpoints:

GET /cancelar_reserva.php:

Esta é a página principal que exibe o formulário de busca de reservas por email.
Endpoint para acessar a funcionalidade de cancelamento de reserva.
Parâmetros:
Nenhum parâmetro necessário.
POST /cancelar_reserva.php:

Endpoint para processar o formulário de busca de reservas por email.
Parâmetros:
email: O email fornecido pelo usuário para buscar as reservas.
GET /cancelar_reserva.php?idReserva={idReserva}:

Endpoint para cancelar uma reserva específica.
Parâmetros:
idReserva: O ID da reserva que será cancelada.
Instruções de Uso:

Acesse a página cancelar_reserva.php em seu navegador.
Insira seu email no formulário e envie.
Se houver reservas associadas ao email fornecido, elas serão exibidas com a opção de cancelamento.
Clique em "Cancelar Reserva" para cancelar uma reserva específica.
A página será atualizada automaticamente após o cancelamento bem-sucedido.


**README**

Este código PHP tem como objetivo fornecer uma interface para cancelar reservas em um sistema de reservas de hotéis. Ele consiste em duas partes principais:

1. **Formulário de Busca de Reservas por Email:**
   - Um formulário simples onde o usuário pode inserir seu email.
   - Quando o usuário envia o formulário, o sistema busca no banco de dados por reservas associadas a esse email.
   - Se reservas forem encontradas, elas são exibidas na página com a opção de cancelamento.

2. **Cancelamento de Reserva:**
   - Cada reserva encontrada na busca é acompanhada de um link "Cancelar Reserva".
   - Ao clicar nesse link, a reserva correspondente é marcada como "cancelada" no banco de dados.
   - Após o cancelamento bem-sucedido, a página é atualizada automaticamente após 3 segundos.


**Endpoints:**

1. **GET /cancelar_reserva.php:**

   - **Descrição:** Este endpoint exibe a página principal para cancelamento de reservas. Ele inclui um formulário onde os usuários podem inserir seu email para buscar e cancelar suas reservas.
  
   - **Parâmetros:** Nenhum parâmetro é necessário.

   - **Exemplo de Uso:** 
     ```
     GET /cancelar_reserva.php
     ```

2. **POST /cancelar_reserva.php:**

   - **Descrição:** Este endpoint processa o formulário de busca de reservas por email. Ele recebe o email fornecido pelo usuário, busca por reservas associadas a esse email no banco de dados e exibe os resultados na página.
  
   - **Parâmetros:** 
     - email: O email fornecido pelo usuário para buscar as reservas.

   - **Exemplo de Uso:** 
     ```
     POST /cancelar_reserva.php
     Content-Type: application/x-www-form-urlencoded

     email=user@example.com
     ```

3. **GET /cancelar_reserva.php?idReserva={idReserva}:**

   - **Descrição:** Este endpoint é usado para cancelar uma reserva específica. Ele recebe o ID da reserva como parâmetro na URL e marca essa reserva como "cancelada" no banco de dados.
  
   - **Parâmetros:** 
     - idReserva: O ID da reserva que será cancelada.

   - **Exemplo de Uso:** 
     ```
     GET /cancelar_reserva.php?idReserva=123
     ```

**Instruções de Uso:**

1. Acesse a página `cancelar_reserva.php` em seu navegador.
2. Insira seu email no formulário e envie.
3. Se houver reservas associadas ao email fornecido, elas serão exibidas com a opção de cancelamento.
4. Clique em "Cancelar Reserva" para cancelar uma reserva específica.
5. A página será atualizada automaticamente após o cancelamento bem-sucedido.
