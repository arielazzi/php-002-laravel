# php-002-laravel

Configurando Ambiente:

 - Criando um novo projeto - laravel new (nome projeto)

 - Pra subir o server e testar, usamos o php artisan serve dentro da pasta do projeto
 
 - Alterando o namespace do projeto 'php artisan app:name (nome projeto)'

--------------------------------
## Algumas Pastas
app: nela ficam seus modelos, views e controllers, que ser�o bem detalhados na pr�xima aula. Em poucas palavras, � onde boa parte do seu c�digo vai ficar. Ela possui uma s�rie de subdiret�rios, como Commands, Console, Http, Events, entre outros. N�o se preocupe em entender o significado de cada um deles agora, vamos v�-los melhor conforme formos precisando.

config: como o nome j� indica, � onde ficam os arquivos de configura��o do seu projeto. Se voc� precisar alterar as configura��es de cache, e-mail, banco de dados, entre outras, j� sabe onde encontrar.

public: � a pasta pra onde seu web server vai apontar. L� fica o arquivo index.php, que aponta para sua aplica��o. Al�m disso, � comum colocarmos os arquivos css, imagens, javascript e todos os demais arquivos p�blicos nesse diret�rio.

vendor: � onde fica o source code do Laravel, plugins e outras depend�ncias. Tudo que voc� usar de terceiros (bibliotecas, frameworks etc.) deve ficar nela.

-------------------------
## MVC

 - Model � a camada onde ficam nossas regras de neg�cio, nossas entidades e classes de acesso ao banco de dados.

 - View � a respons�vel por apresentar as p�ginas e outros tipos de resultado para o usu�rio (ou mesmo para outros sistemas, que se comunicam). � a resposta que o framework envia para o navegador, que normalmente � um HTML.

 - Controller � quem cuida de receber as requisi��es web e decidir o que fazer com elas. Nessa camada definimos quais modelos devem ser executados para determinada a��o e para qual view vamos encaminhar a resposta. Em outras palavras, essa camada quem faz o link entre todas as outras.
-----------------------------
 - Legibilidade: pois no lugar de v�rias fun��es an�nimas e in�meras linhas de c�digo em um mesmo arquivo, tudo fica muito bem distribu�do. Cada comportamento em seu devido lugar, em classes e m�todos com nomes bem definidos.

 - Manutenibilidade: pois se tudo est� bem organizado e encapsulado, n�o precisaremos mexer em um arquivo com 1500 linhas sempre que um problema aparecer. A listagem de produtos parou de funcionar? Sei que tenho que ir a um m�todo do ProdutoController. N�o consigo adicionar usu�rios? Sei que tenho que verificar na classe UsuarioController.