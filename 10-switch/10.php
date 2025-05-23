<?php

/*

switch Statement

*/


#Syntax
switch (expression) {
    case label1:
        //code block
        break;
    case label2:
        //code block;
        break;
    case label3:
        //code block
        break;
    default:
        //code block
}

#example
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


$d = 4;

switch ($d) {
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;
    default:
        echo "Looking forward to the Weekend";
}

$d = 3;

switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The weeks feels so long!";
        break;
    case 6:
    case 0:
        echo "Weekends are the best!";
        break;
    default:
        echo "Something went wrong";
}