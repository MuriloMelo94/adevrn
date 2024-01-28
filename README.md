
 # ADev-RN - Sistema de Gestão de Associados

 Projeto com o desafio da vaga de Estagiário Dev na TecnoTech. Realizado no padrão MVC em PHP sem a utilização de framework.

 As funcionalidades implementadas foram:

 - Cadastro de associados, com: Nome, E-mail, CPF e Data de filiação.
- Cadastro de anuidades, com: Ano e Valor.
    - Cada ano, o valor da anuidade pode ser diferente. Ex: 2021 = R$90,00 / 2022 = R$100,00 / 2023 = R$110,00.
    - Esse valor deve ser facilmente ajustado pelo gerente.
- Cobrança das anuidades do associado.
    - "Checkout" das anuidade devidas pelo associado, calculando valor devido por anuidade e valor total devido.
    - Considere a Data de filiação para saber quais anuidades são devidas pelo associado.
- "Pagamento" da anuidade de um associado.
    - Para este teste o pagamento será simplesmente uma flag no banco de dados, indicando se a anuidade foi paga ou não.
- O software também deve ser capaz de identificar quais são os associados com pagamento em dia e quais estão em atraso.
    - Para isso considere todo novo associado devedor da anuidade corrente.

## Rodando Local

Clone o projeto

```bash
  git clone git@github.com:MuriloMelo94/Laravel-Bootcamp.git
```

Passo 1 - Crie uma conexão com seu banco de dados Mysql e faça um Database com o nome `adev-rn`. Caso use outro nome, atenção para alterar no passo 2.

Passo 2 - Modifique o arquivo `config.php` com as variáveis referentes ao seu usuário e senha do banco de dados.

Passo 3 - Utilize os comandos constantes no arquivo `meu_database.sql` para criar as tabelas no banco.

Passo 4 - Utilize um servidor apache como o Laragon para facilitar o start da sua estrutura. O Laragon inicia o Mysql por padrão ao clicar em 'Iniciar Tudo'.

(Caso use o Laragon, execute o comando `git clone` dentro da pasta www do Laragon).

## Usando o Sistema

A navegação entre as funcionalidades é feita pela nav-bar no topo da aplicação.

Teste a vontade.

## Melhorias futuras

Alguns pontos ainda precisam de atenção futura e poderiam surgir como melhorias contínuas no sistema, sendo elas, dentre outras:

- Verificação de CPF duplicado;
- Verificação de anuidade duplicada;
- Formatação dos inputs de CPF para adicionar pontos e traços;
- Criação de um rodapé;
- etc;