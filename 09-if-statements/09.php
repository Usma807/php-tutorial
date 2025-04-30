<?php

/*

    if Statements

*/


if (condition) {
    // code to be executed if condition is true;
}

#example
if (5 > 3) {
    echo "Have a good day!";
}

$t = 14;

if ($t < 20) {
    echo "Have a good day!";
}


$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
    echo "Both conditions are true";
}


$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
    echo "$a is a number between 2 and 7";
}


#if else
if (condition) {
    // code to be executed if condition is true;
} else {
    // code to be executed if condition is false;
}

#example
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

#if elseif else

if (condition) {
    code to be executed if this condition is true;
} elseif (condition) {
    // code to be executed if first condition is false and this condition is true;
} else {
    // code to be executed if all conditions are false;
}



#example
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

#Short Hand If
$a = 5;

if ($a < 10) $b = "Hello";

echo $b;

#One-line if...else statement:
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

#nested if else
$a = 13;

if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
}

