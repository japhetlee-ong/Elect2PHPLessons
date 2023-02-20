<?php
    require_once 'Fruit.php';
    use BasicConstructor\Fruit;

    $apple = new Fruit("Apple");
    echo $apple->get_name();

