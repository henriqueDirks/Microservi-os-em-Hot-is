﻿# Microservi-os-em-Hot-is


**README**

Este código PHP e HTML forma um sistema simples para reserva de hotel, que inclui funcionalidades para criar reservas, cancelar reservas e buscar quartos disponíveis.

**Documentação Geral:**

1. **Conexão com o Banco de Dados:**
   - O sistema se conecta a um banco de dados MySQL utilizando as credenciais fornecidas (host, banco, usuário e senha).
   - Se houver falha na conexão, uma mensagem de erro será exibida.

2. **Página Principal (`index.php`):**
   - Esta é a página principal do sistema.
   - Ela fornece links para acessar as diferentes funcionalidades do sistema.

3. **Funcionalidade de Criar Reserva:**
   - Ao clicar no link "Criar Reserva", os usuários são direcionados para a página `implementacaoReserva.php`.
   - Lá, os usuários podem selecionar um quarto disponível e fornecer suas informações de reserva, como email e datas de check-in e check-out.

4. **Funcionalidade de Cancelar Reserva:**
   - Ao clicar no link "Cancelar Reserva", os usuários são direcionados para a página `implementacao.php`.
   - Lá, eles podem inserir seu email para buscar e cancelar suas reservas existentes.

5. **Funcionalidade de Buscar Quartos Disponíveis:**
   - Ao clicar no link "Quartos Disponíveis", os usuários são direcionados para a página `implementacaoBusca.php`.
   - Lá, eles podem selecionar critérios de busca, como disponibilidade, localização do hotel e datas de check-in e check-out, para encontrar quartos disponíveis.

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
