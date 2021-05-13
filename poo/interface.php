<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo { // É possível uma classe implementar várias interfaces.

    public function acelerar($velocidade) { // O nome do método deve ser o mesmo e deve ter o mesmo número de parâmetros.
        echo "O veículo acelerou até a velocidade $velocidade km/h";
    }

    public function frenar($velo) { // O nível de acesso deve ser o mesmo para as classes também.
        echo "O veículo frenou até a velocidade $velo km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo está na $marcha marcha";
    }

}

$carro = new Civic();

?>