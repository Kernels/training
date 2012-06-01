<?php

if (!define('KOSTYAOBJECTABSTRACT')) {
    include_once 'KostyaObjectAbstract.php';
}

class KostiaObject extends KostyaObjectAbstract
{

    public function __construct()
    {
        print "Hello";
        $this->returnHelloWorld();
    }

    public function showHello()
    {
        echo 'hello';
    }

    //егор
    public function helloWorld()
    {
        echo 'Hello World';
    }

}
