<?php

require_once 'Pig.php';
require_once 'Sty.php';

// Create an object of the type Pig.
// Instantiate a Pig object.
$sally = new Pig();

// $sally is an instance of Pig.

//$sally->name = 'Sally';
$sally->setName('Sally');
$sally->weight = 280.5;
$sally-> colour = 'yellow';

echo '<pre>';
print_r($sally);
echo '</pre>';

$fred = new Pig();
$fred->setName('fred');
$fred->weight = 300.5;
$fred-> colour = 'black';

echo '<pre>';
print_r($fred);
echo '</pre>';

// -> is called the object operator or object accessor

echo $fred->getName() . ' says ' . $fred->speak() . ' ' . $fred->speak();
echo '<p></p>';
echo $fred->eat('truffles');

echo '<p></p>';
//echo $fred->name;
echo $fred->getName();


echo '<p></p>';
echo $fred->getScientificName();

echo $fred::Owner;

echo '<br>';
echo '<br>';

$sty = new Sty();
$sty->addPig($sally);
$sty->addPig($fred);

$cuthbert = new Pig();
$cuthbert->setName('cuthbert');
$cuthbert->setWeight(300);
$cuthbert->setColour('pink');

$spider = new Pig();
$spider->setName('spider');
$spider->setWeight(305);
$spider->setColour('blue');

$sty->addPigs([$cuthbert, $spider]);

echo '<pre>';
print_r($sty);
echo '</pre>';


