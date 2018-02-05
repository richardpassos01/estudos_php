<?php

$a = 1;

$b = ++$a;

echo $b;

echo "<br>";

$b = --$a;
echo $b;

//pré incremento
$b = ++$a; //add o valor e imprime na tela

//pós incremento
echo $b = $a++; //imprime e depois add o valor;
echo $b; //no segundo echo vai estar com o incremento;