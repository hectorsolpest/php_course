<?php
// Simple array
$names = ['Hector', 'Edward', 'Javier'];

var_dump($names);
echo $names[0];

//Associative array
$students = [
    [
        'Name' => 'Hector Eduardo',
        'Age' => 26,
        'Cash' => 50.75,
        'Kids' => true
    ],
    [
        'Name' => 'Sofia',
        'Age' => 31,
        'Cash' => 100,
        'Kids' => false
    ],
    [
        'Name' => 'Victor',
        'Age' => 28,
        'Cash' => 200,
        'Kids' => true
    ]

];

var_dump($students);
echo $students[2]['Name'];