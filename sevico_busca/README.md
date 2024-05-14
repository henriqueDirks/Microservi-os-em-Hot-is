*Endpoints:*

1. *GET /buscar_quartos.php:*

   - *Descrição:* Este endpoint exibe a página para buscar quartos disponíveis. Ele inclui um formulário onde os usuários podem selecionar critérios de busca, como disponibilidade, localização do hotel, data de check-in e data de check-out.
  
   - *Parâmetros:* Nenhum parâmetro é necessário.

   - *Exemplo de Uso:* 
     
     GET /buscar_quartos.php
     

2. *GET /resultado_busca.php:*

   - *Descrição:* Este endpoint processa o formulário de busca de quartos. Ele recebe os critérios de busca fornecidos pelo usuário, como disponibilidade, localização do hotel, data de check-in e data de check-out, e retorna os resultados da busca na página.
  
   - *Parâmetros:* 
     - disponibilidade: A disponibilidade do quarto selecionada pelo usuário (qualquer, disponível, indisponível).
     - localizacao_hotel: A localização do hotel fornecida pelo usuário para filtrar os resultados.
     - check_in: A data de check-in fornecida pelo usuário para verificar a disponibilidade dos quartos.
     - check_out: A data de check-out fornecida pelo usuário para verificar a disponibilidade dos quartos.

   - *Exemplo de Uso:* 
     
     GET /resultado_busca.php?disponibilidade=disponivel&localizacao_hotel=Centro&check_in=2024-05-15&check_out=2024-05-20
     
