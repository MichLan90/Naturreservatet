<?php
session_start();


abstract class Animal {
    public $name;
    public $picture;
    abstract public function makeSound(): string;
}

class Monkey extends Animal{

    public $nrOfFingers;

    function __construct($nrOfFingers, $name, $picture) {
        $this->nrOfFingers = $nrOfFingers;
    }   

    public function makeSound(): string {return "Yeeeek, yeeek!";}
};


class Giraffe extends Animal{

    public $neckLength;
    function __construct($neckLength, $name, $picture) {
        $this->neckLength = $neckLength;
    }

    public function makeSound(): string {return "Bloblob!";}
};


class Tiger extends Animal{

    public $fangsLength;
    function __construct($fangsLength, $name, $picture) {
        $this->fangsLength = $fangsLength;
    }

    public function makeSound(): string {return "Raaaaaawr!";}
};


class Coconut extends Animal{
    public $nrOfHoles;
    function __construct($nrOfHoles, $name, $picture) {
        $this->nrOfHoles = $nrOfHoles;
    }

    public function makeSound(): string {return "Donk. Sound of a coconut falling down.";}
};

$monkey = new Monkey("10", "Monkey", "./img/monkey.jpg");
$giraffe = new Giraffe("3m", "Giraffe", "./img/giraffe.jpg");
$tiger = new Tiger("50cm", "Tiger", "./img/tiger.jpg");
$coconut = new Coconut("3", "Coconut", "./img/coconut.jpg");


?>



<?php





?>
