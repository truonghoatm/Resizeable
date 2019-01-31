<?php
include_once "Circle.php";
include_once "Square.php";
include_once "Rectangle.php";
$circle = new Circle("circleone",5);

echo $circle->calculateArea()."<br/>";
echo $circle->resize(30)."<br/>";
$square = new Square("square",10);
echo $square->calculateArea()."<br/>";
echo $square->resize(30)."<br/>";