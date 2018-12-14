<?php
class Bear{
    private $name = "bear";

  	public function getName(){
  		return $this->name;
    }

  	public function getSound(){
  		return "Groarrr";
    }
}

class Dog{
    private $name = "dog";

  	public function getName(){
  		return $this->name;
    }

  	public function getSound(){
  		return "Woof woof!";
    }
}

class Animal{
  	public function makeSound($animal){
  		return $animal->getSound();
    }
}

$dog = new Dog();
$bear = new Bear();

$animal = new Animal();
echo "The sound of ".$dog->getName()." is ".$animal->makeSound($dog)."\n";
echo "The sound of ".$bear->getName()." is ".$animal->makeSound($bear)."\n";
