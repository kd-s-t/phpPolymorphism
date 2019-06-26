<?php
include 'controllers/Polymorphism.php';

$dog = new Dog();
$bear = new Bear();

$animal = new Animal();
echo "The sound of ".$dog->getName()." is ".$animal->makeSound($dog)."\n";
echo "The sound of ".$bear->getName()." is ".$animal->makeSound($bear)."\n";
