<?php
$names = ['Hector', 'Edward', 'Javier'];

// get length
echo count($names);

//search array
var_dump(in_array('Hector', $names));

//add to array
$names[] = 'John';
array_push($names,'Maria', 'Sofia');
array_unshift($names,'Alice');
var_dump($names);

//remove from array
array_pop($names);
array_shift($names);
unset($names[0]);
var_dump($names);

//merge arrays
$a = [1,2,3];
$b = [4,5,6];
$c = array_merge($a, $b);
var_dump($c);

