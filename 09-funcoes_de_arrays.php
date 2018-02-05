<?php
/*
* is_array($array) = Verifica se uma determinada variável é um array
* in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
* array_keys($array) = retorna um novo array com os valores do array passado como parâmetro
* array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
* array_pop($array) = exclui a última posição do array 
* array_shift($array) = exclui a primeira posição do array 
* array_unshift($arrm "valor") = adiciona um ou mais elementos o inicio do array 
* array_pus($array, "valor", "valor") = adiciona um ou mais elementos no final do array 
* array_combine($keys, $values) = mescla os dois arrays passados
* array_sum() = calcula a soma dos elementos de um array
* explode("/", "20/01/2001") = transforma string em array
* implode("-", $arr) = transforma array em string
*/


//is_array
$nomes = array("NOME"=>"richard","SOBRENOME"=>"henrique", "LAST NAME"=>"franco");

 if(is_array($nomes)):
 	echo 'é um array';
 	else:
 		echo 'não é um array';
 endif;



 //in_array
 echo '<br>';
 echo in_array("Rodrigo", $nomes);

 if(in_array("richard", $nomes)):
 	echo 'existe no array';
 	else:
 		echo 'não existe';
 	endif;



 //arrays_keys
 echo'<br><hr>';

 $keys = array_keys($nomes);	
 print_r($keys);


echo '<hr>';

//array values

 $values = array_values(($nomes));
 print_r($values);


echo '<hr>';



//array marge
 $carros = array("gol", "camaro");
 $motos = array("bis","CB");

 $veiculos = array_merge($carros, $motos);

 print_r($veiculos);

echo '<br>';


 //array pop
array_pop($carros);
print_r($carros);


echo '<br>';

//array shift
array_shift($carros);
print_r($carros);

echo '<br>';

// array_unshift
$frutas = array("uva","laranja","maça");
print_r($frutas);

echo '<br>';
array_unshift($frutas, "Manga", "ACEROLA", "morango");
print_r($frutas);

echo '<hr>';



//array_push
array_push($frutas, "Manga", "ACEROLA", "morango");
print_r($frutas);

echo "<br>";


//array combine
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco","Framengo","bota");

$times = array_combine($keys, $values);

print_r($times);

echo "<br>";


//Array SUM
$soma = array(5,5);
echo array_sum($soma);


echo '<br>';




//Explode
$data = "04/02/2018";
$novaData = explode('/', $data);
print_r($novaData);


echo "<br>";

$frase = "Meu nome não é jonny";
$novaFrase = explode(' ', $frase);

print_r($novaFrase);




echo "<br>";


//Implode
$carros = array("Camaro", "gol", "itatiba");

$carrosString = implode(",", $carros);

echo $carrosString;
