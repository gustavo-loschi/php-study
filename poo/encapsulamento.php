<?php

class Pessoa {

    public $nome = "Rasmus Lerdof"; // Todos podem acessar atributos ou métodos públicos.
    protected $idade = 48; // Somente métodos dentro da classe ou classes herdadas ou extendidas podem acessar o atributo.
    private $senha = "123456"; // Somente a prórpia classe que acessa os herdeiros não mais.

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}


// A classe programador vai herdar tudo da classe pessoa, menos os atributos e classes que são private
class Programador extends Pessoa {

    public function verDados(){ // Ele irá utilizar esse método, mesmo tento um método com o mesmo nome declarado dentro de Pessoa.
        
        echo get_class($this)."<br>"; // retorna o nome da classe em que o método está sendo chamado.

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>"; // Não será possível ver esse atributo pois esse atributo foi definido como private na classe pai.

    }

}

$objeto = new Programador();

// echo $objeto->nome . "<br>"; 
// echo $objeto->idade . "<br>"; // Não será possível acessar, pois é um atributo protegido. 
// echo $objeto->senha ."<br>"; // private é mais protegido que protected. 

$objeto->VerDados();

?>