<?php

/*****Escalares*********/

//string
$nome = "Richard";
var_dump($nome);



//int
$idade = 23;
var_dump($idade);

if(is_int($idade)):
	echo "A sua idade é $idade";

	else:
	echo "Idade invalida";	
endif;	


echo "<br>";




//boolean
$casado = true;
var_dump($casado);

if(is_bool($casado)):
	echo "Se fudeu";

	else:
	echo "Ta deboa";	
endif;	

echo '<hr>';






/***********compostos***********/

$carros = array("camaro","gol","uno",1,1.4,true);
print_r($carros);

var_dump($carros);


echo '<hr>';








/********object*********/

class Cliente{
	public $nome;

	public function atribuirNome($nome){
		$this -> $nome = $nome;
	}

}


$cliente = new Cliente();
$cliente -> atribuirNome("Richard");



var_dump($cliente);


if(is_object($cliente)):
	echo "é um objeto";

	else:
	echo "não é um objeto";	
endif;	


