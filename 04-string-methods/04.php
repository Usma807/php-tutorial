<?php

#variable in string
$x = "John";
echo "Hello $x";


#String Length
echo strlen("Hello world!");


#Word Count
echo str_word_count("Hello world!");


#Search For Text Within a String
echo strpos("Hello world!", "world");


#modify strings

#Upper Case
$x = "Hello World!";
echo strtoupper($x);

#Lower Case
$x = "Hello World!";
echo strtolower($x);

#Replace String
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

#Reverse a String
$x = "Hello World!";
echo strrev($x);

#Remove Whitespace
$x = " Hello World! ";
echo trim($x);

#Convert String into Array
$x = "Hello World!";
$y = explode(" ", $x);

print_r($y);
/*
Result:
Array ( [0] => Hello [1] => World! )
*/

#concatenate strings

#String Concatenation
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

#slicing [from, to]
$x = "Hello World!";
echo substr($x, 6, 5);

#slicing [from, end]
$x = "Hello World!";
echo substr($x, 6);

#Escape Character

$x = "We are the so-called "Vikings" from the north."; #wrong
$x = "We are the so-called \"Vikings\" from the north."; #correct

/* 

\'	Single Quote	
\"	Double Quote	
\$	PHP variables	
\n	New Line	
\r	Carriage Return	
\t	Tab	
\f	Form Feed	
\ooo  Octal value	
\xhh  Hex value	

*/