<?php

/*

    loops

*/


#while loop
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

#break statement
$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i;
    $i++;
}

#continue statement
$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3) continue;
    echo $i;
}

#Alternative Syntax
$i = 1;
while ($i < 6):
    echo $i;
    $i++;
endwhile;

$i = 0;
while ($i < 100) {
    $i+=10;
    echo $i "<br>";
}

#do while loop

$i = 1;

do {
    echo $i;
    $i++;
} while ($i < 6);


$i = 8;

do {
    echo $i;
    $i++;
} while ($i < 6);

#break statement
$i = 1;

do {
    if ($i == 3) break;
    echo $i;
    $i++;
} while ($i < 6);

#continue statement
$i = 0;

do {
    $i++;
    if ($i == 3) continue;
    echo $i;
} while ($i < 6);


#for loop
for (expression1, expression2, expression3) {
    // code block
}


#example
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}


#break statement
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
}

#continue statement
for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
}

#foreach loop

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}


$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
    echo "$x : $y <br>";
}

#foreach Loop on Objects

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}


#break statement
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
}

#continue statement
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    if ($x == "blue") continue;
    echo "$x <br>";
}


