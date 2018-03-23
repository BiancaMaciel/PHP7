<?php

error_reporting (-1);
/**
 * Nova versão apresenta um Notice ao tentar somar números com strings.
 */
$x = "10 something" + "12 another thing";
echo $x;