<?php

namespace InterfaceUsage;
require_once 'Animal.php';
class Dog implements Animal
{

    public function makeSound()
    {
        echo "Bark";
    }
}