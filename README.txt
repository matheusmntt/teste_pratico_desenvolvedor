README

-> O que vale destacar no código implementado:

O código foi desenvolvido de forma a buscar todos os requisitos pedidos,
Foi utilizado diversas funções de banco de dados para resolver as questões propostas e buscar os dados necessários, demonstrando a capacidade de seleção e uso das funções mais adequadas para cada situação.

Foi implementado sistema de login para que cada usuário possa ter seu portal e fazer seu voto e visualizar os resultados.

Foi utilizado a base de dados "teste" com duas tabelas, sendo elas: "usuarios" com as colunas id(AI), nome_usuario(varchar) e senha(varchar) e a tabela "escolhas" com as colunas id(AI), opcao_escolhida(varchar), data_escolha(varchar) e usuario(varchar)

A página principal traz primeiramente um select para fazer a votação e logo após votar, será retornado uma tabela com as opções que já foram votadas, se você já voto naquele dia, o formulário será desabilitado e apenas a tabela será visível.


-> O que poderia ser feito para melhorar o sistema:

Pode-se implementar validações e tratamento de erros para garantir a segurança e a integridade dos dados.

Pode-se incluir a autenticação e autorização para garantir que somente usuários autorizados tenham acesso às 
informações.

Pode-se incluir um sistema de sugestões de restaurantes na página do usuário e gerar as opções de forma dinâmica e também desabilitando opções não válidas

Pode-se aplicar o projeto dentro de um sistema MVC para melhor manutenção e organização do código


-> Algo a mais que você tenha a dizer:

Este código foi desenvolvido como exemplo para auxiliar a resolução das questões propostas, foi de certa forma desafiador pensar na solução para o problema, mas acredito que eu tenha ido para um caminho que faça sentido. 