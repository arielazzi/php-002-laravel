# php-002-laravel

Configurando Ambiente:

 - Criando um novo projeto - laravel new (nome projeto)

 - Pra subir o server e testar, usamos o php artisan serve

app: nela ficam seus modelos, views e controllers, que ser�o bem detalhados na pr�xima aula. Em poucas palavras, � onde boa parte do seu c�digo vai ficar. Ela possui uma s�rie de subdiret�rios, como Commands, Console, Http, Events, entre outros. N�o se preocupe em entender o significado de cada um deles agora, vamos v�-los melhor conforme formos precisando.

config: como o nome j� indica, � onde ficam os arquivos de configura��o do seu projeto. Se voc� precisar alterar as configura��es de cache, e-mail, banco de dados, entre outras, j� sabe onde encontrar.

public: � a pasta pra onde seu web server vai apontar. L� fica o arquivo index.php, que aponta para sua aplica��o. Al�m disso, � comum colocarmos os arquivos css, imagens, javascript e todos os demais arquivos p�blicos nesse diret�rio.

vendor: � onde fica o source code do Laravel, plugins e outras depend�ncias. Tudo que voc� usar de terceiros (bibliotecas, frameworks etc.) deve ficar nela.