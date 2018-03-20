# PHP 7

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





