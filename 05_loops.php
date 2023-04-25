<?php
/*
 For loop syntax

for(initializel; condition; increment)
{
    code to be executed
}
 */

for($x = 3; $x >=1; $x--)
{
    echo "$x \n";
}
echo "Happy New Year !!!";

/*
 While loop syntax

while(condition)
{
    code to be executed
}
 */
$t = 0;
while($t >=1)
{
    echo "$t \n";
    $t--;
}
echo "Happy New Year";

/*
 Do While loop syntax

do
{
    code to be executed
}
while(condition)

*** do while loop always execute the block of code once,
even if the condition is false
 */
$number = 10;
do
{
    echo "the number is: $number";
}
while($number == 1);

/*
 Foreach loop syntax
foreach(array as $value)
{
    code to be executed
}
 */

$names = ['Hector', 'Edward', 'Javier'];

foreach($names as $n)
{
    echo "$n \n";
}
