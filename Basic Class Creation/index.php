<?php
    require_once 'Fruit.php';
    use Basic\Fruit;

    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    echo $apple->get_name();
    echo "\n";
    echo $banana->get_name();