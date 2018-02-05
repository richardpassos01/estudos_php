### Variaveis

> $_NomeVariavel;
> 
> $Nome_Variavel;

#### Não pode
> $0101;
 
> $*nome;


#### variaveis globais
> globals $Nome_Variavel;


#### Constantes
> define("NOME", "Richard Henrique");

> define("IDADE", 23);

> define("ALTURA", 1.60);

> define("CASADO", false);

> echo 'meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';



#### Array

> $Nome_Variavel = array("indice"=>"valor", "nome"=>"Richard", "altura"=>1.70, "peso"=>69, "casado"=> false);

> $Nome_Variavel = ["ric", "solteiro", "top"];

>print_r($Nome_Variavel);

>echo $Nome_Variavel[1];
```
   foreach($Nome_Variavel as $Recebe_Valor){
   		echo $Recebe_Valor."<br>";
    }
```



#### Funções PHP

$nome = "richard";

//apresenta os dados da variavel, tipo, comprimento, etc.
var_dump($nome);



//is_string,int,array,float, etc.

if(is_string($nome)){
	echo "Valor é uma string";
}

