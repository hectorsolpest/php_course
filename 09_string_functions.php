<?php
$string = 'Hello World';

//get length
echo strlen($string);

//find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

//find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

//reverse a string
echo strrev($string);

//convert to lowercase
echo  strtolower($string);

//convert to uppercase
echo strtoupper($string);

//convert the first character of each word to upper
echo ucwords($string);

//string replace
echo str_replace('Hello', 'Hi', $string);

//return a portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5 );

