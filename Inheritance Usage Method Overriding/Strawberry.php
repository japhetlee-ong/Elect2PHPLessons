<?php

namespace IUMOverriding;
require_once 'Fruit.php';

class Strawberry extends Fruit
{
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}