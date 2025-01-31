<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Saudação com Nome</title>
</head>
<body>

<?php 

$nome1 = "Ana" ;				//Variável com valor Ana
$nome2 = "Lucas" ;				//Variável com valor Lucas
$cidade = "São Paulo " ;		//Variável com valor São Paulo 

$concat =  "Olá " .$nome1. ". Sou o " .$nome2. " sou de " .$cidade;		//Concatenado
$interp = " Olá  $nome1. Sou o $nome2, e moro em $cidade ";				//Interpolado
echo $concat . "<br>" ; 
echo $interp;

 ?>

</body>
</html>
