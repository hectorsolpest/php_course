<?php
/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
 */

 /*
  If statement syntax
 if(condition)
 {
    code to be executed if condition is true
 }
  */

$name = 'Hector';
if ($name == 'Hector')
{
    echo "It's my name";
}
else
{
    echo "It's no my name" ;
}

/*
  Switch statement syntax
 switch(condition)
 {
    case 'condition':
        code to be executed if condition is true;
        break;
 }
  */

$color = 'blue';
switch ($color)
{
    case 'blue':
        echo 'the color is blue';
        break;
    case 'red':
        echo 'the color is red';
        break;
    case 'green':
        echo 'the color is green';
        break;
    default :
        echo 'the color is gray';
        break;
}

