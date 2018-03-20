# PHP 7 :elephant: :computer: 

Este repositório contém anotações referente as mudanças que foram lançadas no [PHP 7](http://php.net).

## Introdução
Será abordado atualizações feitas na versão 7.1
Lista de correções que foram realizadas para a nova versão: http://www.php.net/ChangeLog-7.php#7.1.15


## Docker
Foi utilizado ambiente Docker para o desenvolvimento.

### Iniciando com o Docker
1º Passo:
- acessar o link  https://hub.docker.com/_/php/.
- Escolher uma versão em "Supported tags and respective Dockerfile links".
- Criar uma pasta para o PROJETO e crie um arquivo chamado Dockerfile. Adicione a este arquivo o seguinte contéudo:

```
FROM php:7.1-rc-apache

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80 80

```
Quando o Docker criar a imagem, ele instalará o PHP, o apache embutido e as extensões para PDO e PDO_MYSQL. 
No arquivo também é configurado a porta 80 em nosso ambiente.

Criar também um arquivo chamado docker-compose.yml com o seguinte contéudo:

```
version: '2'
services:
    db:
        image: mysql:5.7
        volumes:
            - "./.data/db:/var/mysql"
        restart: always
        environment:
            MYSQL_ROOT_PASSWORD: root
            MYSQL_DATABASE: mydb
            MYSQL_USER: root
            MYSQL_PASSWORD: root

    web:
        volumes:
            - "./src:/var/www/html"
        depends_on:
            - db
        image: php:7.1-rc-apache
        links:
            - db
        ports:
            - "8001:80"
        restart: always

```

Nele é configurado as informações de conexão com o Banco de Dados associado a imagem criada. 
Desta forma, quando rodarmos o comando docker compose, já teremos todo ambiente configurado na porta 8001.

Então todos os arquivos que forem criados dentro da pasta /src:/var/www/html do projeto, será também apresentados na porta 8001, no navegador.

2º Passo:
- obs: os comandos abaixo foram executados em ambiente Windows utilizando [Hyper-V do Windows](https://docs.microsoft.com/pt-br/virtualization/hyper-v-on-windows/quick-start/enable-hyper-v). Terá o mesmo resultado executado nativamente em ambientes MAC ou Linux, porém alterando o endereço do servidor.

#### Baixar a imagem

> Após adicionado os dois arquivos com o conteúdo correspondente, será necessário rodar o seguinte comando para baixar a imagem que foi definida no arquivo:

```shell

docker build .

```

#### Construir a imagem
> Após concluido o download, basta executar o próximo comando para construir a imagem:

```shell

docker-compose up -d

```
#### Subir servidor

> Para subir o servidor executar o seguinte comando que apresentará a posta local onde subirá a aplicação:

```shell

docker-machine ls

```

#### Testando o ambiente
> Para verificar se está tudo ok, crie um arquivo index.php com o seguinte contéudo:

```php

<?php
    phpinfo();
?>

```

Quando acessar a url presentada via terminal, será exibido o conteúdo deste arquivo (apenas para teste).

Link de referência: [AQUIII :santa: ](http://www.phprs.com.br/2016/05/criando-um-ambiente-de-desenvolvimento-php-com-docker-compose/).

