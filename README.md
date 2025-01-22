<h1 align="center">
  <br>
  <a href="http://www.cursos.vancouvertec.com.br"><img src="https://github.com/rafaelferreira2312/plataforma-curso-laravel/blob/main/imagens/graduacao.png" alt="logo" width="128"></a>
  <br>
   Plataforma de Cursos EAD.
  <br>
</h1>
<h4 align="center">Plataforma de gerenciamento de cursos de tecnologia - v.1.0 <a href="http://www.cursos.vancouvertec.com.br" target="_blank">


## Documentação de cores

| Cor               | Hexadecimal                                                |
| ----------------- | ---------------------------------------------------------------- |
| Rosa              | ![#e449ad](https://via.placeholder.com/10/e449ad?text=+) #e449ad |
| Azul Escuro       | ![#4986fc](https://via.placeholder.com/10/4986fc?text=+) #4986fc |
| Roxo              | ![#ce4be8](https://via.placeholder.com/10/ce4be8?text=+) #ce4be8 |
| Preto             | ![#000000](https://via.placeholder.com/10/000000?text=+) #000000 |
| Azul Claro        | ![#f8f9fa](https://via.placeholder.com/10/f8f9fa?text=+) #f8f9fa |


## Stack utilizada

**Front-end:** HTML, Bootstrap 4, CSS, Jquary

**Back-end:** Laravel, PHP, Mysql



## Instalação do projeto com o componente jetstream

Baixando e criando o projeto no laravel 9.
```bash
composer create-project laravel/laravel plataformacursoead
```

Acessar a pasta do projeto criado.
```bash
cd plataformacursoead
```

Efetuar o teste do projeto.
```bash
php artisan serve
```

Acessar a pasta raiz do projeto (plataformacursoead) e copiar todo o conteúdo da pasta (template-front-end) para pasta (public/template).
```bash
cd public 
mkdir template
```

Baixar o composer do jetstream.
```bash
composer require laravel/jetstream
```

O jetstream:installcomando também instalará um conjunto de testes de "recurso" que fornecem cobertura de teste para os recursos fornecidos pelo Jetstream.
```bash
php artisan jetstream:install livewire
```

Após instalar o Jetstream, você deve instalar e construir suas dependências do NPM em um terminal.
```bash
npm install
```

Rodar as dependências em outro terminal.
```bash
npm run dev
```

Migrar todas as tabelas criadas e alteradas para o banco de dados.
```bash
php artisan migrate
```

Efetuar o teste do projeto.
```bash
php artisan serve
```


## Configuração do componente jetstream

Execute este comando para gerar componentes:
```bash
php artisan vendor:publish --tag=jetstream-views
```
Em seguida, você deve personalizar os SVGs localizados nos componentes: 
resources/views/vendor/jetstream/components/application-logo.blade.php 
resources/views/vendor/jetstream/components/authentication-card-logo.blade.php 
resources/views/vendor/jetstream/components/application-mark.blade.php

Módulo de linguagem pt-BR (português brasileiro) para Laravel:
Instale o pacote.
```bash
composer require lucascudo/laravel-pt-br-localization --dev
```

Publique as traduções.
```bash
php artisan vendor:publish --tag=laravel-pt-br-localization
```

Configure o Framework para utilizar 'pt-BR' como linguagem padrão. Altere Linha 85 do arquivo config/app.php para:
```bash
'locale' => 'pt-BR',
```

Configurar o Framework para utilizar 'America/Sao_Paulo' como data hora padrão. Altere Linha 72 do arquivo config/app.php para:
```bash
'timezone' => 'America/Sao_Paulo',
```


## Criação das tabelas do banco de dados em mysql

 Tabela Users
|   Nome              |  Tipo          |    Observação                                       |
| :---                |     :---:      |          :---:                                      |
| id                  | -              | Campo chave primária                                |
| name                | string         | Campo nome                                          |
| email               | string         | Campo e-mail (unique)                                |
| usertype            | string         | Campo default(0)  Aluno=0 / Instrutor=1 / Admin=3   |
| address             | string         | Campo endereço (nullable)                           |
| phone               | string         | campo telefone (nullable)                           |
| email_verified_at   | timestamp      | Campo de verifica e-mail (nullable)                 |
| password            | string         | Campo senha                                         |
| rememberToken       | -              | Campo lembrar senha                                 |
| current_team_id     | string         | Campo hora atual                                    |
| profile_photo_path  | string         | Campo gravar a foto (nullable) tamanho 2048         |
| -                   | timestamps     | Campo gravar data e hora quando inserirum dado      |






## Referências

 - [Site do laravel](https://laravel.com/)
 - [Site do componente jetstream](https://jetstream.laravel.com/)
 - [Site para trocar a logo do componente jetstream](https://jetstream.laravel.com/1.x/installation.html#application-logo)
 - [Site para alterar o idioma do laravel](https://github.com/lucascudo/laravel-pt-BR-localization)
 - [Site de pack de icones](https://www.flaticon.com/br/packs/education-963)
 - [Site para baixar template](https://themewagon.com/themes/free-responsive-bootstrap-4-html5-education-website-template-studylab/)
 - [Template do site de front-end](https://technext.github.io/studylab/index.html)
 - [Laravel E-commerce Project Tutorial Beginners to Advance | Laravel 9 Tutorial](https://www.youtube.com/watch?v=bSA6LYtXcb0&list=PLm8sgxwSZofdIdWQxDhg3HUplNJIZRjqb&index=1)
 - [Site sobre os comandos do github](https://www.loginradius.com/blog/engineering/git-commands/)
 
