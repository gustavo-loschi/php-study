<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __destruct() {
        // Executar quando for necessário excluir o objeto da memória.
        echo "O objeto é limpo da memória se a instrução for definida no método destruct.";
    }

    public function __toString() {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$meuEndereco = new Endereco('Rua Conselheiro Lafaiete', 1977, 'Belo Horizonte');

var_dump($meuEndereco);

// Chamando o método toString
echo "<br>";
echo $meuEndereco;

// Chamando o método destruct
echo "<br>";
unset($meuEndereco);

?>