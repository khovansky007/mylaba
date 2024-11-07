<?php

namespace App;

class MagicClass
{
    public function __construct()
    {
        echo "__construct called\n";
    }

    public function __destruct()
    {
        echo "__destruct called\n";
    }

    public function __call($name, $arguments)
    {
        echo "__call called with method: $name\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic called with static method: $name\n";
    }

    public function __get($name)
    {
        echo "__get called for property: $name\n";
    }

    public function __set($name, $value)
    {
        echo "__set called for property: $name with value: $value\n";
    }

    public function __isset($name)
    {
        echo "__isset called for property: $name\n";
    }

    public function __unset($name)
    {
        echo "__unset called for property: $name\n";
    }

    public function __toString()
    {
        return "__toString called\n";
    }

    public function __invoke()
    {
        echo "__invoke called\n";
    }

    public function __clone()
    {
        echo "__clone called\n";
    }

    public function __debugInfo()
    {
        return ["__debugInfo called"];
    }
}
