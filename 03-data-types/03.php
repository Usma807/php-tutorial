<?php

/* 

Data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

*/

#var_dump
$x = 5;
var_dump($x);

#string
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

#integer
$x = 5985;
var_dump($x);

#float
$x = 10.365;
var_dump($x);

#boolean
$x = true;
var_dump($x);

#array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

#object
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

#null value
$x = "Hello world!";
$x = null;
var_dump($x);

#change data type
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);