<?php

error_reporting (-1);
/**
 * antes o PHP não permitia a manipulação com offsets negativos
 */
$result = substr("abcdefg", -2, 1);

$x = "abcdefg abcdefg";

/**
 * 1º Parâmetro: a string a ser lida
 * 
 * 2º Parâmetro: string a ser procurada
 * 
 * 3º Parâmetro: index apartir de qual posição deverá ser procurada a string
 */
$result = strpos($x, "c", -8);

echo $result;