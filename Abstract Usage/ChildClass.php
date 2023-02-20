<?php

namespace AbstractUsage;

require_once 'ParentClass.php';
class ChildClass extends ParentClass
{
    public function prefixName($name)
    {
        if($name == "Jericho"){
            $prefix = "Mr.";
        }elseif ($name == "Justine"){
            $prefix = "Ms.";
        }else{
            $prefix = "";
        }

        return "{$prefix} {$name}";
    }
}