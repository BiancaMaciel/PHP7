# PHP 7 :elephant: :computer: 

Este repositório contém anotações referente as mudanças que foram lançadas no [PHP 7](http://php.net).



## Introdução

Será abordado atualizações feitas na versão 7.1
Lista de correções que foram realizadas para a nova versão: [Link Correções](http://www.php.net/ChangeLog-7.php#7.1.15).

## Instalação



# Anotações

## Nullable Types

Forçando o retorno em métodos ou funções.

> Apartir da versão 7.0 já é suportado a escolha do tipo de retorno dos métodos.

O exemplo de utilização e anotações está no arquivo null_types.php

obs: a tipagem forçada pode ser opcional, basta utilizar o interrogação a frente do parâmetro (?).

## Array Destructuring

> Apartir da versão 7 é possível fazer a desconstrução de um array sem utilizar a função list das versões anteriores.

O exemplo de utilização e anotações está no arquivo array_destructuring.php

obs: é possível realizar o mapeamento também com chaves associativas conforme o exemplo do arquivo(array_destructuring.php).

## Funções aritiméticas em uma string

> Apartir da versão 7 é apresentado um Notice ao tentar realizar operações aritiméticas com strings.

O exemplo de utilização e anotações está no arquivo strings.php

obs: ao tentar realizar esse tipo de operação, os números são calculados normalmente, porém você será notificado pelo PHP com um Notice, alertando que não é uma boa prática utilizar desta forma.





