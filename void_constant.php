<?php

error_reporting (-1);

/**
 * Retorno void(em branco)
 */

 function returAnything($x) : void {
  //  return false; //mostra erro pois o método é void
 }

 echo returAnything(111);

 class Car {
    const C_TYPE = "Normal";

    // na Versão 7 está disponível determinar a visibilidade da variável constante, antes estava disponível apenas para atributos
    private const C_TYPEX = "X";
    protected const C_TYPEY = "Y";

 }

 $x = new Car();
 $x::CTYPEX;