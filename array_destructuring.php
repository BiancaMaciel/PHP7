<?php

/**
 * Destruindo um Array.$array
 * 
 */
$array = [1, 2, 3];
//list($x, $y, $z) = $array; PHP 5
[$x, $y, $z] = $array; //PHP 7 

/**
 * Mapeando array com chaves
 */
$array2 = ['index1' => 'a', 'index2' => 'b'];
['index1' => $x, 'index2' => $y] = $array2;

var_dump($x); 