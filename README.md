# Microservi-os-em-Hot-is


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

