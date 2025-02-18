<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <?php 
    //Superclasse
    class Animal{
        public function fazerSom(){
            return "O animal faz um som.";
        }
    }

    //Subclasse
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Au au au au";
        }
    }

    //Outra subclasse
    class Gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaaaaaaau";
        }
    }

    //Função que utiliza polimorfismo
    function emitirSomAnimal(Animal $animal){
echo $animal->fazerSom() . "<br>";
    }

    //Criar objetos - instâncias
    $cachorro1 = new Cachorro(null);
    $gato1 = new Gato(null);
echo $cachorro1->fazersom();
echo "<br>";
echo $gato1->fazerSom();


echo "<br>" . "<br>";


//Chamando a função com diferentes objetos, mas com a mesma assinatura
emitirSomAnimal($cachorro1);
emitirSomAnimal($gato1);
    ?>
    
</body>
</html>