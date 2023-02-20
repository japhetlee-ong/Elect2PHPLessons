<?php
    require_once 'Fruit.php';
    use AMUsage\Fruit;

    $mango = new Fruit();
    $mango->name = 'Mango'; // OK
    //$mango->color = 'Yellow'; // ERROR
    //$mango->weight = '300'; // ERROR