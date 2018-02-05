<?php

//Constantes
define("NOME", "Richard Henrique");
define("IDADE", 23);
define("ALTURA", 1.60);
define("CASADO", false);

echo 'meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
echo '<br>';


function Altura(){
	echo ALTURA;
}

if(ALTURA < 1.80):

	Altura();

else:
	echo 'meucu';
endif;	