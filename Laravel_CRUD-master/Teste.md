# Laravel_CRUD

### Projeto de programação web com laravel 5

 * Implementado sistema CRUD para cadastramento de tasks (tarefas de escopo service desk)
 * Implementado área administrativa, para usuários cadastrados em banco MySQL.
 * Implementado área de cadastro de usuários.

##### Ferramentas utilizadas
 *  [Wamp Server](http://www.wampserver.com/en/)
 *	[HTML5](https://www.w3schools.com/html/html5_intro.asp)
 *	[JavaScript](https://www.w3schools.com/js/default.asp)
 *	[Bootstrap](https://getbootstrap.com)	
 *	[MySQL](https://www.mysql.com/)
 *	[PHP 7.1](http://php.net/releases/7_1_0.php)
 *	[PHP Storm IDE](https://www.jetbrains.com/phpstorm/)
 *	[Composer](https://getcomposer.org/)
 *	[Artisan](https://laravel.com/docs/5.5/artisan)
 *	[Laravel5](https://laravel.com/)
 *	[laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper)
 *	[Eloquent Orm](https://laravel.com/docs/5.0/eloquent)
 *	[PDO](http://php.net/manual/pt_BR/book.pdo.php)
 *	[Forms Laravel](https://laravelcollective.com/docs/5.2/html) 


##### Acessando o projeto

  1. Prepare seu ambiente para desenvolvimento WEB, utilize WampServer, Vagrant, etc.


  2. Instale o composer(gerenciador de pacotes do laravel), php, e todos componentes solicitados na documentação do [Laravel](https://laravel.com/)


  3. Clone o respositório ou baixe o ZIP
     ![Clone](https://richardpassos01.github.io/imagens/gitclone.jpg)
     
     
  4. Extrai os arquivos para seu diretório web, normalmente a pasta www fica em c://wamp.


  5. configure o arquivo .Env para conexão com seu banco de dados.


  6. Abra o CMD, vá até o diretório que está o projeto, dentro da pasta utilize o comando <b>php artisan migrate</b> para que seus models sejam migrados para o banco de dados.


  7. Você pode utilizar o comando <b>php artisan serve </b> para abrir uma porta e  acessar o projeto colando o endereço gerado no navegador, ou via wampServer, abrir o <b>localhost:8080/Project_Name/public/</b>



##### Navegando no site

1. Selecione Register para registrar novos usuários
 ![inicio](https://raw.githubusercontent.com/richardpassos01/richardpassos01.github.io/master/imagens/Laravel/LaravelIndex.jpg)
 <br><br><br>
2. Para acessar o crud, primeiro você precisa registrar um usuário, feito isto irá se logar na área adminstrativa.
![register](https://raw.githubusercontent.com/richardpassos01/richardpassos01.github.io/master/imagens/Laravel/laravelRegistrar.JPG)
 <br><br><br>
 3. Após ser direcionado a home, clicar em tasks.
![task](https://raw.githubusercontent.com/richardpassos01/richardpassos01.github.io/master/imagens/Laravel/LaravelHome.jpg)
<br><br><br>

4. Nesta tela você interage, podendo ver, criar, editar e deletar as tarefas.
![tasks](https://raw.githubusercontent.com/richardpassos01/richardpassos01.github.io/master/imagens/Laravel/LaravelCrud.jpg)
<br><br><br>

5. Campo de criação de tarefas.
![create](https://raw.githubusercontent.com/richardpassos01/richardpassos01.github.io/master/imagens/Laravel/LaravelCreate.JPG)
<br><br><br>

6. Caso insira imagens, elas são apontadas no banco de dados e ficam salvas localmente na pasta <b>Project_Name\resources\uploads</b>

<br>
  
##### Qualquer duvida entre em contato:

 * [Linkedin](https://www.linkedin.com/in/richard-henrique-451a8979) 
 
