<?php

#echo and print

#(echo)
#1
echo "Hello"; 
echo("Hello"); 

#2
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";


#3
$txt1 = "Learn PHP";
$txt2 = "google.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

#4
$txt1 = "Learn PHP";
$txt2 = "google.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';

#(print)

#1
print "Hello";
print("Hello");

#2
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

#3
$txt1 = "Learn PHP";
$txt2 = "google.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";

#4
$txt1 = "Learn PHP";
$txt2 = "google.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';