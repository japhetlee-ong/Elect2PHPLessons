<?php

namespace ConstantsUsage;

class Message
{
    const WELCOME_MESSAGE = "Hello there";
    public function greet() {
        echo self::WELCOME_MESSAGE;
    }
}