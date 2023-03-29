<?php

require_once 'Pig.php';

// Create an object of the type Pig.
// Instantiate a Pig object.
$sally = new Pig();

// $sally is an instance of Pig.

$sally->name = 'Sally';
$sally->weight = 280.5;
$sally-> colour = 'yellow';

echo '<pre>';
print_r($sally);
echo '</pre>';

$fred = new Pig();
$fred->name = 'fred';
$fred->weight = 300.5;
$fred-> colour = 'black';

echo '<pre>';
print_r($fred);
echo '</pre>';