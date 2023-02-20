<?php
    require_once 'ChildClass.php';
    use AbstractUsage\ChildClass;

    $class = new ChildClass();
    echo $class->prefixName("Jericho");
    echo "\n";
    echo $class->prefixName("Japhet");
    echo "\n";
    echo $class->prefixName("Justine");