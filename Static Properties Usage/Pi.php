<?php

namespace StaticPropertiesUsage;

class Pi
{
    public static $value=3.14159;
    public function getValue() {
        return self::$value;
    }
}