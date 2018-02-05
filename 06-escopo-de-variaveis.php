<?php

	$nome = "richard";
	$a = 1;
	$b = 2;
	$c = 3;

	function exibeNome(){
		global $nome;
		echo $nome;	
	}

	exibeNome();


	function exibeCidade(){
		//escopo local
		global $cidade;

		$cidade = "<br>Sao Paulo";
	}

	exibeCidade();
	echo $cidade;

	echo '<hr>';



	function soma(){
		//array GLOBAL
		echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
	}

	soma();