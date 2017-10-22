<?php

/**
 * Demo
 */
namespace Soeasy\Demo;

class HelloWorld
{
    public function __construct($name = 'Soeasy')
    {
        $this->name = $name;
    }
    public function hello()
    {
        return 'Hello '.$this->name.'!';
    }
}
