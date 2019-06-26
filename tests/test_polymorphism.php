<?php
require 'controllers/Polymorphism.php';

use PHPUnit\Framework\TestCase;

class TestPolymorphism extends TestCase
{

    public function testDogGetName()
    {
        $dog = new Dog();
        $this->assertEquals("dog", $dog->getName());
    }

    public function testBearGetName()
    {
        $bear = new Bear();
        $this->assertEquals("bear", $bear->getName());
    }

    public function testDogSound()
    {
        $dog = new Dog();
        $animal = new Animal();

        $this->assertEquals("Woof woof!", $animal->makeSound($dog));
    }

    public function testBearSound()
    {
        $bear = new Bear();
        $animal = new Animal();

        $this->assertEquals("Groarrr", $animal->makeSound($bear));
    }

}
