<?php
class Person {

    var $first_name;
    var $last_name;
    var $employed = false;
    var $country = 'None';
}

$customer = new Person;
$customer->first_name = 'Anna';
$customer->last_name = 'Martin';
$customer->country = 'USA';
$customer->employed = 'not';

echo $customer->country . "<br />";
echo $customer->last_name . "<br />";
echo "This customer is {$customer->employed} employed. <br />";
?>