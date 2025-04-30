<?php

/*

PHP Constants

*/


#define() function
define(name, value);

define("GREETING", "Welcome to my ..!");
echo GREETING;

#const Keyword
const MYCAR = "Volvo";
echo MYCAR;

#Constant Arrays
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

#Constants are Global
define("GREETING", "Welcome to my ..!");

function myTest() {
    echo GREETING;
}

myTest();