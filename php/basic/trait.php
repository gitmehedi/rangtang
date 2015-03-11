<?php

class Base
{
    public function sayHello()
    {
        echo "Say Hello";
    }
}

trait SayWorld
{
    public function sayHello()
    {
        echo "Say World";
    }
}

class Myone extends Base
{
    use SayWorld;
}

$o = new Myone();
$o->sayHello();