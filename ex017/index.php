<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor e Destrutor</title>
</head>
<body>
    <?php 
    class Produto {
        //Atributos
        public $nome;
        public $preco;

        //Construtor: chamado quando o objeto é criado
        public function __construct($nome, $preco) {
            $this->nome = $nome;
            $this->preco = $preco;
            echo "Produto '$this->nome' criado com sucesso! <br>";
        }
    
   
        

        //Destrutor: chamado quando o objeto é destruido
        public function __destruct(){
            echo "Produto '$this->nome' foi destruido! <br>";
        }
    //Método para exibir os dados
    public function exibirDetalhes(){
        echo "Nome: $this->nome, Preço: R$ $this->preco <br>";
    }
}
        //Criando um objeto da classe produto (Instanciando)
        $p1 = new Produto("Camiseta", 39.90); //O construtor é chamado automaticamente
        $p2 = new Produto("Tênis", 300.00);
        $p1->exibirDetalhes();
        $p2->exibirDetalhes();

        // Quando o script termina ou o objeto sai de escopo, o destrutor é chamado
        unset($p1); //Chama o destrutor explicitamente



        //Mais uma classe construct e destruct

        class ConexaoBanco {
            private $conexao;

            //Construtor: simula abrir a conceção com o banco
            public function __construct(){
                $this->conexao = "Conexão com o banco de dados aberta!";
                echo "$this->conexao . <br>";
            }
                //Destrutor: simula fechar a conexão com o banco
                public function __destruct(){
                    echo "Conexão com o banco de dados fechada! <br>";
                }
            }
        
            //Criando um objeto da classe ConexaoBanco
            $conectado = new ConexaoBanco(); //O construtor é chamado aqui
    ?>
</body>
</html>