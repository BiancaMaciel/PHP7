<?php

/**
 * Forçando o tipo do retorno
 *
 * @param [type] $x
 * @return integer
 */
function sum(?int $x) : ?int { //? significa que o valor do retorno pode ser inteiro ou não, sendo opcional
    return $x;
}

var_dump(sum(null));