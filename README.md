
## Sobre o projéto

Projeto focado em criar um sistema de eventos simples utilizando o framework laravel, o objetivo desse projéto é melhorar minhas abilidade com o laravel.

## Como instalar o sistema no seu Local host

Primeiramente você deve copiar o link do repositório e rodar o seguinte comando no ser terminal no diretório em que você deseja instalar.

```

~$ git clone https://github.com/jmarcos16/eventos.git

```

Em seguida rode os seguintes comandos no terminal.

```
$ cd events/
$ cp .env.example .env
$ nano .env
$ composer install
$ artisan key:generate 

```

Lembrando que sera necessário ter o composer e o PHP já instalado.

Em seguida vá ate o arquivo .env e procure pelo campo abaixo.

```

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=events
DB_USERNAME=root
DB_PASSWORD=

```

Depois vá ate o seu banco de dados e crie um novo banco com o nome events no modo utf8mb4_unicode_ci.

Depois de seguir essa etapas o sistema ja estará funcionando.

