<?php


/*

    Arrays:

        Indexed arrays - Arrays with a numeric index
        Associative arrays - Arrays with named keys
        Multidimensional arrays - Arrays containing one or more arrays

*/


#example
$cars = array("Volvo", "BMW", "Toyota");

#different types in array
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

#Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

echo $cars[0];

$cars[1] = "Ford";
var_dump($cars);

foreach ($cars as $x) {
    echo "$x <br>";
}

#index number
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

#Associative Arrays
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964); // key => value
var_dump($car);


#example
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

$car["year"] = 2024;
var_dump($car);

foreach ($car as $x => $y) {
    echo "$x: $y <br>";
}


#Multidimensional Arrays
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

#example
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}




