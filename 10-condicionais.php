<?php

$numero = 8;

if($numero == 10):
	echo "é igual a 10";
elseif ($numero <= 9):
		echo "é menor ou igual a 9";
else:
	echo "não é igual a 10";
endif;



//ternario

echo '<hr>';

$media = 6;

echo ($media >= 7) ? "Aprovado" : "Reprovado";

echo '<br>';


//switch case

$cor = "preto";

switch ($cor):
	case 'vermelho':
		echo "é vermelho";
		break;
	case 'verde':
		echo "é verde";
		break;
	case 'azul':
		echo "é azul";	
		break;
	default:
		echo "não é cor padrão";
		break;
endswitch;