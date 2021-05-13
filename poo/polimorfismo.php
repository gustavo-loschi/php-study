<?php

abstract class Animal {

    public function comunicar(){
        return "som";
    }

    public function mover(){
        return "anda";
    }
}

class Cachorro extends Animal {

    // O método comunicar sofreu um polimorfismo, já que seu funcionamento é diferente do que na classe pai.
    public function comunicar(){
        return "late";
    }

}

class Passaro extends Animal { // Na classe passáro houve polimorfismo nos dois métodos.

    public function comunicar(){
        return "canta";
    }

    public function mover(){
        return "voa e " . parent::mover(); // chama o método mover da classe pai.
    }
}

class Gato extends Animal {

    // Novamente houve polimorfismo no método comunicar.
    public function comunicar(){
        return "mia";
    }
}

$pluto = new Cachorro();
echo $pluto->comunicar()."<br>";
echo $pluto->mover()."<br>";

echo "-------------------------<br>";

$garfield = new Gato();
echo $garfield->comunicar()."<br>";
echo $garfield->mover()."<br>";

echo "-------------------------<br>";

$ave = new Passaro();
echo $ave->comunicar()."<br>";
echo $ave->mover()."<br>";


?>