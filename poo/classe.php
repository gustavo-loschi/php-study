<?php

class Pessoa {

    public $nome; //criando atributo

    public function falar() { // Método

        return "O meu nome é ".$this->nome; // $this somente utilizado dentro de um método

    }

}

$developer = new Pessoa(); // instanciando a classe Pessoa
$developer->nome = "Gustavo Loschi";
echo $developer->falar();

?>