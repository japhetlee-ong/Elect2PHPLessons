<?php

namespace TraitsUsage;
require_once 'MessageOne.php';
require_once 'MessageTwo.php';
class MainClass
{
    use MessageOne,MessageTwo;
}