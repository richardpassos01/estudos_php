<?php

/*
* ==
* !=
* ===
* !===
* <>
* <
* >
* <=
* >=
* <=>
*/

//igual
if(10 == 10):
	echo 'Positivo';
else:
	echo 'Negativo';
endif;

echo '<br>';
//diferente
if(10 != 10):
	echo 'Positivo';
else:
	echo 'Negativo';
endif;



echo '<br>';
//identidade
if(10 === 10):
	echo 'Identico';
else:
	echo 'Não identico';
endif;



echo '<br>';
//Não identico
if(10 !== 10):
	echo 'Positivo';
else:
	echo 'Negativo';
endif;





echo '<br>';
//diferente
if(10 <> 11):
	echo 'Positivo';
else:
	echo 'Negativo';
endif;




echo '<br>';
//spaceship
//se o numero do lado esquerdo for menor, ele retorna -1, se os numeros forem iguais, retorna 0, se o lado direito for menor, retorna 1. 
var_dump(40 <=> 40);

