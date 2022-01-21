## O que voce precisa para rodar
 - Versoes PHP: 7.4+
 - banco de dados de preferencia ( configurar no .env )
 - email ( configurar no .env, dependendo do dominio o port e criptografia mudam)


## O que fazer quando tiver tudo instalado?
 - Depois de criar seu banco, configurar seu .env e verificar as conexoes com o banco,
    Rodar os seguintes comandos no projeto:
    - npm install && npm run dev
    - php artisan migrate
    - php artisan serve
    - abrir no seu local

## Importante:
 - Usuarios, clientes, produtos e vendas fakes ja sao geradas no seu banco ao rodar as migrations
 - Usuario padrao: 
    - login: admin@admin.com
    - senha: admin
    - porem nao tem confirmacao de email, para a mesma deve-se confirmar seu email OU mudar no banco
 - Novos usuarios nao possuem a role admin para poder acessar a maioria das funcionalidades, apenas o usuario default, isso porque como o sistema tem relacao com      vendas de clientes "customizados", deve-se manter um controle da equipe que pode acessar o sistema.
 - Para adicionar a role admin a algum usuario, deve-se atribuir pela pagina `/admins` ou diretamente no banco
