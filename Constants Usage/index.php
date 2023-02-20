<?php
    require_once 'Message.php';
    use ConstantsUsage\Message;

    $message = new Message();
    $message->greet();
    echo "\n";
    echo "Direct Calling the constant will show the same result: \n";
    echo Message::WELCOME_MESSAGE;