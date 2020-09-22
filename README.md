# Teste Piperun

#Descrição do teste

Eu Jorge procuro uma solução de agenda de reuniões para satisfazer as minhas necessidades e a da minha sócia Clara e dos meus colaboradores: 

1. Eu como usuário quero dizer se o agendamento realizado foi aceito ou não.
1. Eu como usuário não quero ter múltiplos agendamentos no mesmo horário.
1. Eu como usuário quero filtrar as atividades por range de data, ex.: do dia 21/12/2010 até 10/01/2029.
1. Eu como usuario trabalho somente em horário comercial, não trabalho aos finais de semana e feriados oficiais do Brasil(feriados municipais e estaduais não contam). 
1. Eu como usuário quero poder criar e listar os agendamentos(Somente a Clara pode editar e excluir).
1. Eu Jorge quero ser notificado por e-mail toda vez que um agendamento de reunizo for solicitado.
1. Os clientes deve informar o e-mail, nome, data, horário e a pauta da reunião; 
1. Meus clientes podem visualizar os horários já preenchidos, mas não pode ver as informações sensíveis.
1. A minha agenda deve conter, data de início, data de conclusão, tempo de duração da reunião, quem solicitou(pode ter solicitações internas de outro sócio), com quem foi agendada e se foi aceita.

#Requisitos:

1. Neste teste deverá ser utilizado o framework LARAVEL como base de desenvolvimento.
1. A aplicação de backend deverá ser uma API Restful;
1. A aplicação de frontend deverá ser utilizando Vue.Js e consumir a API Restful;
1. A aplicação deverá ser entregue através de um link no github.
1. No readme deve conter a descrição da abordagem utilizada para solucionar o problema em cada um dos projetos.
1. Requisitos técnicos que deverá ser levado em consideração durante a elaboração da solução.

#Backend:

1. Utilizar Repository Pattern.
1. Utilização dos conceitos de SOLID e Clean Architecture.
1. Services.
1. Testes Unitários. 
1. Seeders.
1. PSR.
1. Fractal ou ApiResources.
1. Padrão da url.
1. Interfaces.
1. Migrations.
1. Todas as variáveis de configurações de acessos a banco de dados e demais integrações devem estar no .ENV do projeto. 

#Frontend: 
1. Lint.
1. Utilização dos conceitos de SOLID e Clean Architecture.
1. Testes unitários com Jest.
1. Utilização dos componentes.
1. Tolerância a falhas caso a API esteja Offline.
1. Todas as variáveis de configurações de acessos a API e demais integrações devem estar no .ENV do projeto. 

#Critérios de Avaliação
1. Entrega
1. O projeto está completo para ser executado?
1. O projeto atende ao que se propõe fazer?
1. Todos requisitos foram atendidos?
1. Boas Práticas
1. O código está de acordo com o guia de estilo do PHP/Vue?
1. O código está bem estruturado, seguindo os princípios SOLID, PSR e Lint?
1. O código está fluente na linguagem?
1. O código faz o uso correto de Design Patterns?
1. Os commits são pequenos e consistentes?
1. As mensagens de commit são claras?
1. Documentação (README)
1. O código foi entregue com um arquivo de README claro de como se guiar?
1. A documentação foi suficiente para executar o projeto?
1. Código Limpo
1. O código possibilita expansão para novas funcionalidades?
1. O código é Don't Repeat Yourself?
1. O código é fácil de compreender?
1. Controle de Qualidade
1. O código possui configuração de PSR e Lint?
1. O código possui testes unitários?