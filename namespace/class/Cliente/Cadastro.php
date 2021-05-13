<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarVenda(){
        echo "A venda foi registrada para o cliente " . $this->getNome();
        echo "sdas";
    }

}

?>