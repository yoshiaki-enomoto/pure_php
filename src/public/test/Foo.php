<?php

class Foo
{
    public function helloGateway()
    {
        // self::hello();
        static::hello();
    }

    public static function hello()
    {
        echo __CLASS__, ' hello!', "<br>";
    }
}

// $foo = new Foo();
// $foo->helloGateway();

class Bar extends Foo
{
    public static function hello()
    {
        echo __CLASS__, ' hello', "<br>";
    }
}

$bar = new Bar();
$bar->helloGateway();
    // self::hello()　class Foo のhello()が呼び出される：遅延静的束縛
    // static::hello()　class Bar のhello()が呼び出される
