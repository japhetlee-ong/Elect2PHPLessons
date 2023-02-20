<?php
require_once 'Pi.php';
use StaticPropertiesUsage\Pi;

$pi = new Pi();
echo $pi->getValue();
echo "\nShould show the same value as static variable calling: \n";
echo Pi::$value;