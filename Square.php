<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 15:31
 */
include_once ('Rectangle.php');
include_once ('Resizeable.php');

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($percent)
    {
        return $this->calculateArea()+$this->calculateArea()*$percent/100;
    }

}