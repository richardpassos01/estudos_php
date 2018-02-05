<?php

//Arrays

$carros = array("gol", "veloster", "parati");

var_dump($carros);

print_r($carros);


//inserindo um valor no Indice X

$carros[10] = "ford";

echo '<hr>';
print_r($carros);


//Inserindo o indice

$carros = [1=>"carro",2=>"carro2"];

echo '<hr>';
print_r($carros);



//Array associativo  

$carros = ["posicao1"=>"carro","posicao2"=>"carro2"];

echo '<hr>';
print_r($carros);


//print_R imprime arrays

//count conta o valor do array.

echo '<hr>';

$novo_array = [1,2,3,4,5,6,7,8,9,10,11,12,13];

echo count($novo_array);

echo '<hr>';


/****FOREACH*********/

foreach($novo_array as $contagem){
	echo $contagem.'<br>'; 
}

echo "<hr>";




//Array associativo com exibição de indice e valor

$array_dados = array("Nome"=>"Richard", "Idade"=>23, "Homem" => true);

foreach ($array_dados as $key => $value) {
	echo $key.':'.$value.'<br>';
}


echo '<hr>';

//Array Multidimensionais

$times = array(
	"Cariocas"=> array("Campeao"=>"Vasco", "VICE"=>"Flamengo","PERDERDOR"=>"botafogo"),
	"Paulistas"=> array("campeado"=>"Santos","FODAO"=>"SAO PAULO"),
	"Baianos"=> array("Agua de coco"=>"Bahia","pego"=>"Vitoria")	
);


echo "<br>";

echo "CARIOCAS<br>";
foreach($times["Cariocas"] as $indice=>$valor){
	echo $indice.':'.$valor.'<br>';
}

echo "<br>PAULISTAS<br>";
foreach($times["Paulistas"] as $indice=>$valor){
	echo $indice.':'.$valor.'<br>';
}



echo "<br>Baianos<br>";
foreach($times["Baianos"] as $indice=>$valor){
	echo $indice.':'.$valor.'<br>';
}