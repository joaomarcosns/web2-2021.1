# Guia de instalação

<h4>1 - Clone o repositorio ou baixa o aquivo compactado: https://github.com/joaomarcosns/web2-2021.1.git <br></h4>
<h4>2 - Clone a branch projeto do projeto1-1Unidade: git checkout Projeto1-1Unidade <br></h4>
<h4>3 - entre na pasta codigo: cd codigo <br></h4>
<h4>4 - Abra o Terminal nessa pasta <br></h4>
<h4>5 - Rode o comando: composer install <br></h4>
<h4>6 - Rode o comando: composer upgrade <br></h4>
<h4>7 - Cirar aquivo .env: cp .env-example .env <br></h4>
<h4>8 - Rode os seguinte comandos: <br></h4>
<h4>  $ chmod -R 777 storage # adiciona todas as permissões na pasta storage <br></h4>
<h4>  $ php artisan key:generate # gera a chave da aplicação <br></h4>
<h4>  $ php artisan storage:link <br></h4>
<h4>  $ php artisan migrate<br></h4>
  
 <h3>OBS Caso der algum erro, sugiro que clone esse repositorio https://github.com/joaomarcosns/laravendas.git <br>
 E segua todas as intruções acima, apenas iguinorar o número 3 </h3>
