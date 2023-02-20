<?php
    require_once 'Cat.php';
    require_once 'Dog.php';
    use InterfaceUsage\Cat;
    use InterfaceUsage\Dog;

    $cat = new Cat();
    $cat->makeSound();
    echo "\n";
    $dog = new Dog();
    $dog->makeSound();