<?php
/**
 * this is a script to test variable types
 * useful for testing validity of a type of variable
 */
//declare without assigning
$testing;
//checks if null
echo "is null? ".is_null($testing);
echo "<br/>";
$testing = 5;
//checks if integer
echo "is an integer? ".is_int($testing);
echo "<br/>";
$testing = "five";
//checks if string type
echo "is a string? ".is_string($testing);
echo "<br/>"
?>
<?php


