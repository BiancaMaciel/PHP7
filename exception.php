<?php

error_reporting (-1);

class MyE extends Exception {}

class MyE2 extends Exception {}

class Car 
{
    public function drive($m=1) {

        try {
            if ($m == 10) {
                throw new MyE("Error...1");
            }

            if ($m == 9) {
                throw new MyE2("Error...2");
            }
            echo "driving...";
        } catch (MyE  | MyE2 $e) {
            echo "Error while driving";
        }
        /**
         * Código duplicado nas versões anteriores
         */
    }
}

$car = new Car;
$car->drive(9);
