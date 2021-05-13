<?php

class Carro
{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getMotor():float
    {
        return $this->motor;
    }

    public function getAno():String
    {
        return $this->ano;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibirCarro()
    {
        return array("modelo" => $this->getModelo(), "motor" => $this->getMotor(), "ano" => $this->getAno());
    }

}

$fox = new Carro();
$fox->setModelo("Fox Rock in Rio");
$fox->setMotor(1.6);
$fox->setAno("13/14");
var_dump($fox->exibirCarro());
