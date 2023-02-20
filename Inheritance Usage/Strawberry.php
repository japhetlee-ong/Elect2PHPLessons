<?php

namespace InheritanceUsage;

require_once 'Fruit.php';
//THIS IS THE CHILD CLASS
class Strawberry extends Fruit
{
    public function messsage(){
        echo "Am I a fruit or a berry? ";
    }
}