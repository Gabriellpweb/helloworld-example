<?php
namespace OProgramalista;

class HelloWorld
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo "Hello World, how are you $this->name?";
    }
}