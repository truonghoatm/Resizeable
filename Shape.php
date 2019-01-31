<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 15:28
 */

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}
