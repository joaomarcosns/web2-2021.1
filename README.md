<h1 align="center">
  <!--<img src="">-->
  <p>🖥 Projeto I</p>
</h1>

<p align="center">
  Um simples sistema de vendas desenvolvido utilizando o framework <a href="https://laravel.com/">Laravel</a> da linguagem <a href="https://www.php.net/">PHP</a> como forma de aprendizado e também como projeto da disciplina de <b>Laboratório de Programação Web II</b> - Semestre 2021.1 do curso de <b>Análise e Desenvolvimento de Sistemas</b> ofertado pelo <a href="https://www.ifbaiano.edu.br/unidades/guanambi/"><b>IFBaiano <i>Campus</i> Guanambi</a> durante os anos de 2021 e 2022.</b> Professor: <b>Fabio dos Santos Lima</b>
</p>

#

<p align="center">
  🔗 <a href="https://laravenda.herokuapp.com/">Clique aqui</a> para acessar a aplicação online.
</p>

#

### 📌 → Instalando localmente
- Pré requisitos: <a href="https://www.php.net/">PHP</a> `>= 7` e <a href="https://getcomposer.org/">Composer</a> `>= 2`


- Clone o projeto utilizando o comando abaixo
```bash
  git clone https://github.com/netosep/web2-2021.1.git
```
- Abra o diretório do projeto
```bash
  cd web2-2021.1
```
- Selecione a branch `Projeto1-1Unidade`
```bash
  git checkout Projeto1-1Unidade 
```
- Renomeie o arquivo `.env.example` para `.env`
```bash
  cp .env.example .env
```
- Altere os valores de conexão com o banco de dados do arquivo `.env`
```env
  # mysql, pgsql, etc
  DB_CONNECTION=mysql
  DB_HOST=localhost
  DB_PORT=3306
  DB_DATABASE=dbname
  DB_USERNAME=dbuser
  DB_PASSWORD=dbpass
```
- Instale as dependencias
```bash
  composer install
```
- Após instalar todas as dependencias, execute os seguintes comandos no terminal:
```bash
  # Adiciona todas as permissões na pasta storage
  $ chmod -R 777 storage 
  # Gera a chave da aplicação
  $ php artisan key:generate 
  # Cria um link simbólico entre as pastas /public/storage -> /storage/app/public
  $ php artisan storage:link
```
- E por ultimo, os seguintes comandos
```bash
  # Cria todas as tabelas do banco de dados SQL
  $ php artisan migrate
  # Cria um servidor em sua localhost na porta 8000 a partir do próprio php
  $ php -S localhost:8000 public/index.php
```

#

### 📄 →  Licença:
<ul>
  <ul>
    <li><a href="">Licença</a></li>
  </ul>
</ul>

### ⚠️ → Instalando localmente
- Casso o sistema não funciona, colone esse repsitorio https://github.com/joaomarcosns/laravendas e começa da entrução da .env

<p align="center">
  <i>Developed with 🖤 by <a href="https://github.com/joaomarcosns" >João Marcos Neves da Silva</a></i>
</p>


