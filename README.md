# Guia de instalação

1 - Clone o repositorio ou baixa o aquivo compactado: https://github.com/joaomarcosns/web2-2021.1.git <br>
2 - Clone a branch projeto do projeto1-1Unidade: git checkout Projeto1-1Unidade <br>
3 - entre na pasta codigo: cd codigo <br>
4 - Abra o Terminal nessa pasta <br>
5 - Rode o comando: composer install <br>
6 - Rode o comando: composer upgrade <br>
7 - Cirar aquivo .env: cp .env-example .env <br>
8 - Rode os seguinte comandos: <br>
  $ chmod -R 777 storage # adiciona todas as permissões na pasta storage <br>
  $ php artisan key:generate # gera a chave da aplicação <br>
  $ php artisan storage:link <br>
  $ php artisan migrate
  
 OBS Caso der algum erro, sugiro que clone esse repositorio https://github.com/joaomarcosns/laravendas.git <br>
 E segua todas as intruções acima, apenas iguinorar o número 3
